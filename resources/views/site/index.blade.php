@extends('layouts.app')

@section('title', 'Home')

@section('header')
    <x-header headerBgColor="white"/>
@endsection()

@section('content')

    <section class="flex flex-row-reverse">
        <div class="bg-pink flex flex-wrap xl:p-20 p-6 pb-96 xl:w-10/12 2xl:w-9/12 3xl:w-4/6 xl:py-44 relative xl:items-end w-11/12 py-24">
            <h1 class="font-bold xl:text-6xl absolute xl:top-20 xl:n-left-24 tracking-widest text-4xl top-10 n-left-4 text-3xl">Cu Janeway</h1>
            <div class="flex flex-wrap xl:flex-nowrap relative">
                <img class="xl:w-80 3xl:w-92 mb-6" src="/images/me.jpg" alt="Picture of me during a hike."/>
                <p class="text-green font-medium mb-2 xl:absolute top-0 4xl:text-3xl xl:text-2xl xl:rotate-90 xl:t-origin-tl 4xl:n-right-64 xl:n-right-52 tracking-wider">Web Developer</p>
            </div>
            <p class="xl:max-w-128 xl:text-xl xl:ml-16">
                Hey, I'm a Web Developer from Manchester. I build things in PHP & JavaScript using tools like Laravel, Laravel Livewire, Yii2, Docker and some other cool things.
                <br/>
                <br/>
                Feel free to check out my blog to see what I've been tinkering with lately.
            </p>
            <h2 class="xl:w-full text-xl mt-12 xl:text-3xl xl:font-medium tracking-wider xl:mt-36">Recent Posts</h2>
            <ul>
                {{-- @foreach($recentPosts as $post)
                    <li>
                        <span class="green-text">{{ $post->created_at }}</span>
                        <a class="" href="{{ $post->url }}">
                            {{ $post->title }}
                        </a>
                    </li>
                @endforeach --}}
            </ul>
            <img class="absolute bottom-0 xl:n-bottom-4 2xl:n-left-80 2xl:w-96 xl:w-72 xl:n-left-52" src="/images/doodles/home.svg" alt="Graphical representation of me."/>
        </div>
    </section>
@endsection()
