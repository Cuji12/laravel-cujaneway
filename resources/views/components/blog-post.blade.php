@props([
    'post'
])
<a class="group w-full" href="{{ route('blog.show', ['blog' => $post->uri_title]) }}">
    <div class="flex flex-col mb-4">
        <span class="text-slate-500 text-sm mb-1">{{ date('F j, Y', strtotime($post->created_at)) }}</span>
        <h2 class="text-xl font-medium mb-2 group-hover:text-green">{{ $post->title }}</h2>
        <p class="mb-4 sm:hidden">{!! substr($post->content, 0, 150) . '...' !!}</p>
        <p class="mb-4 hidden sm:block 3xl:hidden">{!! substr($post->content, 0, 250) . '...' !!}</p>
        <p class="mb-4 hidden 3xl:block">{!! substr($post->content, 0, 300) . '...' !!}</p>
        @foreach($post->getTags() as $tag)
            <div class="bg-pink rounded-lg">
                <p>{{ $tag }}</p>
            </div>
        @endforeach
        <div class="bg-green mx-auto opacity-50 group-last:hidden" style="height: 1px; width: 95%;"></div>
    </div>
</a>