@props([
    'project'
])
<a class="group w-full" href="{{ route('projects.show', ['project' => $project->uri_name]) }}">
    <div class="flex flex-col mb-4">
        <span class="text-slate-500 text-sm mb-1">{{ date('F j, Y', strtotime($project->created_at)) }}</span>
        <h2 class="text-xl font-medium mb-2 group-hover:text-green xl:text-2xl">{{ $project->name }}</h2>
        <p class="mb-4 xl:text-lg">{{ strip_tags($project->description) }}</p>
        <div class="flex gap-x-3 content-center flex-wrap gap-y-3">
            @foreach($project->getTagsAsArray() as $tag)
                <div class="bg-green text-white rounded-full px-4 text-sm">
                    <p>{{ $tag }}</p>
                </div>
            @endforeach
        </div>
        <div class="bg-green mx-auto opacity-50 mt-4 group-last:hidden" style="height: 1px; width: 95%;"></div>
    </div>
</a>