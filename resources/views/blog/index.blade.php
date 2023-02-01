@extends('layouts.app')

@section('title', 'Blog')
@section('meta_description', 'See what I\'ve been writing about lately.')

@section('header')
    <x-header headerBgColor="bg-pink"/>
@endsection()

@section('content')
    <div class="w-full px-8 bg-pink sm:flex sm:justify-center">
        <h1 class="items-center justify-center w-full max-w-screen-md pt-20 pb-6 text-3xl font-bold tracking-wider sm:w-9/12 lg:w-7/12 xl:w-6/12 sm:text-3xl 3xl:text-4xl">Blog</h1>
    </div>
    <main class="flex flex-col items-center w-full p-8">
        <div class="max-w-screen-md sm:w-9/12 lg:w-7/12 xl:w-6/12">
            @foreach($posts as $post)
                <x-blog-post :post="$post" />
            @endforeach
        </div>
        <img class="max-w-screen-md mt-10 mb-4" src="/images/doodles/blog.svg" alt="Me sat on a typewriter.">
    </main>
@endsection
