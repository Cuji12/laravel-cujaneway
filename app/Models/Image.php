<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use CrudTrait;

    protected $guarded = ['id'];
    protected $fillable = ['url', 'absolute_url'];

    public function setUrlAttribute($value)
    {
        $attribute_name = "url";
        $disk = "public";
        $destination_path = "";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
    }
}
