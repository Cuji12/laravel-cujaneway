@extends('layouts.app')

@section('title', 'Cu Janeway - Web Developer')
@section('description', "Hey, I'm <strong>Cu Janeway</strong>, I build applications and sometimes write about what I've been up to. Come see what I've been doing lately.")

@section('header')
    <x-header headerBgColor="bg-white"/>
@endsection()

@section('content')

    <main class="flex flex-row-reverse">
        <div class="relative flex flex-wrap w-11/12 p-6 py-24 rounded-md bg-pink xl:p-20 pb-96 xl:w-10/12 2xl:w-9/12 3xl:w-4/6 xl:py-44 xl:items-end lg:w-9/12">
            <h1 class="absolute text-3xl font-bold tracking-widest green-highlight xl:text-6xl xl:top-20 xl:n-left-24 top-10 n-left-4 md:text-4xl md:n-left-13">Cu Janeway</h1>
            <div class="relative flex flex-wrap xl:flex-nowrap">
                <img class="mb-6 xl:w-80 3xl:w-92 xl:mb-0 sm:w-72 5xl:w-112" src="/images/me.jpg" alt="Picture of me during a hike."/>
                <p class="top-0 w-full mb-2 font-medium tracking-wider text-green xl:absolute xl:text-2xl xl:rotate-90 xl:t-origin-tl xl:n-right-88 md:text-xl 5xl:text-4xl 5xl:n-right-124">Web Developer</p>
            </div>
            <p class="green-highlight xl:max-w-128 xl:text-xl xl:ml-16 md:text-lg 5xl:text-2xl">
                Hey, I'm a Web Developer from Manchester. I build things in PHP & JavaScript using tools like Laravel, Laravel Livewire, Yii2, Docker and some other cool things.
                <br/>
                <br/>
                Feel free to check out my blog to see what I've been tinkering with lately or have a nosie at what I've been doing on various forums:
                <a target="_blank" class="underline hover:text-green" href="https://forum.yiiframework.com/u/cuji12">Yii2</a>,
                <a target="_blank" class="underline hover:text-green" href="https://community.fly.io/u/cuji">Fly</a>,
                <a target="_blank" class="underline hover:text-green" href="https://stackoverflow.com/users/20600516/cu-janeway">Stack Overflow</a>.
            </p>
            <h2 class="mt-12 mb-4 text-xl font-medium tracking-wider green-highlight xl:w-full md:text-2xl 5xl:text-4xl">Recent Posts</h2>
            <ul class="flex flex-col w-full list-disc list-inside gap-y-3 marker:text-green lg:list-none lg:text-lg 5xl:text-2xl">
                @foreach($recentPosts as $post)
                    <li>
                        <a class="hover:text-green" href="{{ route('blog.show', ['blog' => $post->uri_title]) }}">
                            <span class="hidden mr-4 font-medium text-green lg:inline">{{ date('F j, Y', strtotime($post->created_at)) }}</span>
                            {{ $post->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <img class="absolute right-0 w-64 n-bottom-4 xl:n-bottom-4 2xl:n-left-80 2xl:w-96 xl:w-72 xl:n-left-52 md:w-80 5xl:w-112 5xl:n-left-100"  src="/images/doodles/home.svg" alt="Graphical representation of me."/>
        </div>
    </main>
@endsection()
