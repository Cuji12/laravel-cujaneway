@extends('layouts.app')

@section('title', 'Home')

@section('header')
    <x-header headerBgColor="bg-white"/>
@endsection()

@section('content')

    <section class="flex flex-row-reverse">
        <div class="bg-pink flex flex-wrap xl:p-20 p-6 pb-96 xl:w-10/12 2xl:w-9/12 3xl:w-4/6 xl:py-44 relative xl:items-end w-11/12 py-24 lg:w-9/12 rounded-md">
            <h1 class="font-bold xl:text-6xl absolute xl:top-20 xl:n-left-24 tracking-widest top-10 n-left-4 text-3xl md:text-4xl md:n-left-13">Cu Janeway</h1>
            <div class="flex flex-wrap xl:flex-nowrap relative">
                <img class="xl:w-80 3xl:w-92 mb-6 xl:mb-0 sm:w-72 5xl:w-112" src="/images/me.jpg" alt="Picture of me during a hike."/>
                <p class="text-green w-full font-medium mb-2 xl:absolute top-0 xl:text-2xl xl:rotate-90 xl:t-origin-tl xl:n-right-88 tracking-wider md:text-xl 5xl:text-4xl 5xl:n-right-124">Web Developer</p>
            </div>
            <p class="xl:max-w-128 xl:text-xl xl:ml-16 md:text-lg 5xl:text-2xl">
                Hey, I'm a Web Developer from Manchester. I build things in PHP & JavaScript using tools like Laravel, Laravel Livewire, Yii2, Docker and some other cool things.
                <br/>
                <br/>
                Feel free to check out my blog to see what I've been tinkering with lately.
            </p>
            <h2 class="xl:w-full text-xl mt-12 font-medium tracking-wider md:text-2xl 5xl:text-4xl mb-4">Recent Posts</h2>
            <ul class="flex flex-col gap-y-3 w-full list-disc marker:text-green list-inside lg:list-none lg:text-lg 5xl:text-2xl">
                @foreach($recentPosts as $post)
                    <li>
                        <span class="text-green hidden mr-4 lg:inline font-medium">{{ date('F j, Y', strtotime($post->created_at)) }}</span>
                        <a class="hover:text-green" href="{{ route('blog.show', ['blog' => $post->uri_title]) }}">
                            {{ $post->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <img class="absolute n-bottom-4 right-0 w-64 xl:n-bottom-4 2xl:n-left-80 2xl:w-96 xl:w-72 xl:n-left-52 md:w-80 5xl:w-112 5xl:n-left-100"  src="/images/doodles/home.svg" alt="Graphical representation of me."/>
        </div>
    </section>
@endsection()
