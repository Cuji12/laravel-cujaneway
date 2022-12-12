<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use CrudTrait;

    protected $guarded = ['id'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uri_title';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'image_url',
        'uri_title'
    ];

    /**
     * Interact with the post's uri_title.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function uriTitle(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => strtolower(str_replace(' ', '-', $value)),
        );
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "posts";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
    }

    public function getTags() 
    {
        return explode(',', $this->tags);
    }
}
