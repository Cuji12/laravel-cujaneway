@props([
    'project' => $project
])
<a class="group" href="{{ route('projects.show', ['project' => $project->uri_name]) }}">
    <div class="h-72 w-72 sm:w-96 sm:h-96 lg:w-84 lg:h-84 text-center relative flex flex-col justify-center bg-center bg-cover p-5 text-white group-hover:scale-105 group-active:scale-105 transition-transform">
        <h2 class="z-10 text-2xl font-bold">{{ $project->name }}</h2>
        <p class="z-10 max-w-28">{{ $project->brief_description }}</p>
        <div class="z-10 flex flex-wrap mt-3 gap-x-3 gap-y-3 justify-center text-black group-hover:text-white group-active:text-white transition-colors">
            @foreach($project->getTagsAsArray() as $tag)
                <div class="bg-pink group-hover:bg-green group-active:bg-green rounded-full px-4 text-sm transition-colors">
                    <p class="font-medium">{{ $tag }}</p>
                </div>
            @endforeach
        </div>
        <img class="absolute h-full w-full top-0 left-0 z-0 rounded-sm" src="{{ $project->getCoverImage() }}" />
    </div>
</a>