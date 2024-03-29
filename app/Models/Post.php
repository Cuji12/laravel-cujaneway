<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
        'tags',
        'uri_title',
        'meta_description'
    ];

    public function getTagsAsArray(): Array
    {
        return explode(',', trim($this->tags));
    }

    public function getRelatedPosts()
    {
        return Post::where('id', '!=', $this->id)->take(2)->get();
    }
}
