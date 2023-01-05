@props([
    'post'
])
<a class="group w-full" href="{{ route('blog.show', ['blog' => $post->uri_title]) }}">
    <div class="flex flex-col mb-4">
        <span class="text-slate-500 text-sm mb-1">{{ date('F j, Y', strtotime($post->created_at)) }}</span>
        <h2 class="text-xl font-medium mb-2 group-hover:text-green">{{ $post->title }}</h2>
        <p class="mb-4 sm:hidden">{{ strip_tags(substr($post->content, 0, 150)) . '...' }}</p>
        <p class="mb-4 hidden sm:block 3xl:hidden">{{ strip_tags(substr($post->content, 0, 250)) . '...' }}</p>
        <p class="mb-4 hidden 3xl:block">{{ strip_tags(substr($post->content, 0, 300)) . '...' }}</p>
        <div class="flex gap-x-3 content-center">
            @foreach($post->getTagsAsArray() as $tag)
                <div class="bg-pink rounded-full px-4 text-sm">
                    <p>{{ $tag }}</p>
                </div>
            @endforeach
        </div>
        <div class="bg-green mx-auto opacity-50 mt-4 group-last:hidden" style="height: 1px; width: 95%;"></div>
    </div>
</a>