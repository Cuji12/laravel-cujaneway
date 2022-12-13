<?php

namespace App\Observers;

use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectObserver
{
    /**
     * Handle the Project "deleted" event.
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
