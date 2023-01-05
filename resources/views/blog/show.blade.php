@extends('layouts.app', ['blogPostCss' => true])

@section('title', 'Blog')

@section('header')
    <x-header headerBgColor="bg-pink"/>
@endsection()

@section('content')
    <x-page-title title="{!! $post->title !!}" lgWidth="lg:w-8/12"/>
    <main class="flex flex-col items-center justify-center px-8">
        <div class="flex flex-col w-full pt-10 sm:w-9/12 lg:w-8/12 xl:w-9/12 2xl:w-8/12 3xl:w-6/12 4xl:w-5/12 5xl:w-4/12 3xl:text-lg">
            {!! $post->content !!}
            <div class="mx-auto my-4 opacity-50 bg-green group-last:hidden" style="height: 2px; width: 100%;"></div>
        </div>
        <div class="flex flex-col w-full sm:w-9/12 lg:w-6/12 xl:w-9/12 2xl:w-8/12 3xl:w-6/12 4xl:w-5/12">
            <h5 class="mb-2 font-medium text-md">More Posts</h5>
            @foreach($post->getRelatedPosts() as $relatedPost)
                <p class="mb-4">
                    <a class="pb-0 mb-2 text-xl border-b-2 hover:text-green border-pink" href="{{ route('blog.show', ['blog' => $relatedPost->uri_title]) }}">
                        {{ $relatedPost->title }}
                    </a>
                </p>
            @endforeach
        </div>
        <img class="max-w-screen-md mt-10 mb-4" src="/images/doodles/blog.svg" alt="Me sat on a typewriter.">
    </main>
@endsection