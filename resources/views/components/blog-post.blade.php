@props([
    'post'
])
<a class="w-full group" href="{{ route('blog.show', ['blog' => $post->uri_title]) }}">
    <div class="flex flex-col mb-4">
        <span class="mb-1 text-sm text-slate-500">{{ date('F j, Y', strtotime($post->created_at)) }}</span>
        <h2 class="mb-2 text-xl font-medium group-hover:text-green">{{ $post->title }}</h2>
        <p class="mb-4 sm:hidden">{{ strip_tags(substr($post->content, 0, 150)) . '...' }}</p>
        <p class="hidden mb-4 sm:block 3xl:hidden">{{ strip_tags(substr($post->content, 0, 250)) . '...' }}</p>
        <p class="hidden mb-4 3xl:block">{{ strip_tags(substr($post->content, 0, 300)) . '...' }}</p>
        <div class="flex content-center gap-x-3">
            @foreach($post->getTagsAsArray() as $tag)
                <div class="px-4 text-sm rounded-full bg-pink">
                    <p>{{ $tag }}</p>
                </div>
            @endforeach
        </div>
        <div class="mx-auto mt-4 opacity-50 bg-green group-last:hidden" style="height: 1px; width: 95%;"></div>
    </div>
</a>