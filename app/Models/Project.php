<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;

class Project extends Model
{
    use CrudTrait;

    protected $guarded = ['id'];
    protected $casts = [
        'images' => 'array'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'name';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'url',
        'uri_name',
        'description',
        'brief_description',
        'tags',
        'images'
    ];

    public function setImagesAttribute($value)
    {
        $attribute_name = "images";
        $disk = "public";
        $destination_path = "";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public function getTagsAsArray(): Array
    {
        return explode(',', trim($this->tags));
    }

    /**
     * Handle multiple file upload and DB storage:
     * - if files are sent
     *     - stores the files at the destination path
     *     - generates random names
     *     - stores the full path in the DB, as JSON array;
     * - if a hidden input is sent to clear one or more files
     *     - deletes the file
     *     - removes that file from the DB.
     *
     * @param  string  $value  Value for that column sent from the input.
     * @param  string  $attribute_name  Model attribute name (and column in the db).
     * @param  string  $disk  Filesystem disk used to store files.
     * @param  string  $destination_path  Path in disk where to store the files.
     */
    public function uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path)
    {
        $originalModelValue = $this->getOriginal()[$attribute_name] ?? [];

        if (! is_array($originalModelValue)) {
            $attribute_value = json_decode($originalModelValue, true) ?? [];
        } else {
            $attribute_value = $originalModelValue;
        }

        $files_to_clear = request()->get('clear_'.$attribute_name);

        // if a file has been marked for removal,
        // delete it from the disk and from the db
        if ($files_to_clear) {
            foreach ($files_to_clear as $key => $filename) {
                Storage::disk($disk)->delete($filename);
                $attribute_value = Arr::where($attribute_value, function ($value, $key) use ($filename) {
                    return $value != $filename;
                });
            }
        }
        // if a new file is uploaded, store it on disk and its filename in the database
        if (request()->hasFile($attribute_name)) {
            foreach (request()->file($attribute_name) as $file) {
                if ($file->isValid()) {
                    // 1. Generate a new file name
                    $new_file_name = md5($file->getClientOriginalName().random_int(1, 9999).time()).'.'.$file->getClientOriginalExtension();

                    // 2. Move the new file to the correct path
                    $file_path = $file->storeAs($destination_path, $new_file_name, $disk);

                    // 3. Add the public path to the database
                    $attribute_value[] = $file_path;
                }
            }
        }

        $this->attributes[$attribute_name] = json_encode($attribute_value);
    }

    public function getCoverImage() 
    {
        return Storage::url($this->images[0]);
    }

    public function getProjectImages() 
    {
        $images = [];
        foreach ($this->images as $image) {
            $images[] = Storage::url($image);
        }

        return $images;
    }
}
