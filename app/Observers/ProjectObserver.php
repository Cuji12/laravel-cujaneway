<?php

namespace App\Observers;

use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProjectObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function saving(Project $project)
    {
        $project->uri_name = Str::slug($project->name);
    }

    /**
     * Handle the Project "deleting" event.
     *
     * @param  \App\Models\Project  $project
     * @return void
     */
    public function deleting(Project $project)
    {
        // if (count($project->images)) {
        //     foreach ($project->images as $file_path) {
        //         Storage::disk('public')->delete($file_path);
        //     }
        // }
    }
}
