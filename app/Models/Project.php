<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

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
        return 'uri_name';
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
        'images',
        'portrait_images',
        'meta_description',
        'meta_tags',
        'meta_author'
    ];

    public function setImagesAttribute($value)
    {
        $attribute_name = "images";
        $disk = "public";
        $destination_path = "";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public function getProjectImages()
    {
        $images = [];
        foreach ($this->images as $image) {
            $images[] = Storage::url($image);
        }

        return $images;
    }

    public function getRelatedProjects(): Collection
    {
        $projects = Project::where('id', '!=', $this->id)->get();

        return $projects->random(2);
    }

    public function getTagsAsArray(): Array
    {
        return explode(',', trim($this->tags));
    }
}
