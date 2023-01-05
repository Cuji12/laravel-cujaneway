@props([
    'project'
])
<a class="w-full group" href="{{ route('projects.show', ['project' => $project->uri_name]) }}">
    <div class="flex flex-col mb-4">
        <span class="mb-1 text-sm text-slate-500">{{ date('F j, Y', strtotime($project->created_at)) }}</span>
        <h2 class="mb-2 text-xl font-medium group-hover:text-green xl:text-2xl">{{ $project->name }}</h2>
        <p class="mb-4 xl:text-lg">{{ strip_tags($project->description) }}</p>
        <div class="flex flex-wrap content-center gap-x-3 gap-y-3">
            @foreach($project->getTagsAsArray() as $tag)
                <div class="px-4 text-sm text-white rounded-full bg-green">
                    <p>{{ $tag }}</p>
                </div>
            @endforeach
        </div>
        <div class="mx-auto mt-4 opacity-50 bg-green group-last:hidden" style="height: 1px; width: 95%;"></div>
    </div>
</a>