@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="pink-bg">
        <h1>Cu Janeway</h1>
        <img src="" alt="Picture of me during a hike."/>
        <p class="absolute green-text">Web Developer</p>
        <p>Hey, I'm a Web Developer from Manchester. I build things in PHP & JavaScript using tools like Laravel, Laravel Livewire, Yii2, Docker and some other cool things.</p>
        <h2>Recent Posts</h2>
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
        <img src="" alt="Graphical representation of me."/>
    </section>
@endsection()