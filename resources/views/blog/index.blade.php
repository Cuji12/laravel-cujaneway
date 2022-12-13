@extends('layouts.app')

@section('title', 'Blog')

@section('header')
    <x-header headerBgColor="bg-pink"/>
@endsection()

@section('content')
    <div class="bg-pink w-full sm:flex sm:justify-center px-8">
        <h1 class="font-bold tracking-wider items-center justify-center text-2xl pt-20 pb-6 w-full sm:w-9/12 lg:w-7/12 xl:w-6/12 max-w-screen-md sm:text-3xl 3xl:text-4xl">Blog</h1>
    </div>
    <main class="flex flex-col w-full items-center p-8">
        <div class="sm:w-9/12 lg:w-7/12 xl:w-6/12 max-w-screen-md">
            @foreach($posts as $post) 
                <x-blog-post :post="$post" />
            @endforeach
        </div>
        <img class="max-w-screen-md mt-10 mb-4" src="/images/doodles/blog.svg" alt="Me sat on a typewriter.">
    </main>
@endsection
