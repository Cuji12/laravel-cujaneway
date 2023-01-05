@php
    
@endphp

@extends('layouts.app')

@section('title')
    {{ $project->name }}
@endsection

@section('header')
    <x-header headerBgColor="bg-white"/>
@endsection()

@section('content')
    <main class="flex flex-row-reverse">
        <div 
        class="bg-pink flex flex-col p-6 pb-96 xl:w-11/12 3xl:w-5/6 relative w-11/12 lg:w-9/12 rounded-md" 
        x-data="{ h1Height: $refs.projectName.getBoundingClientRect().height }">
            <div class="relative h-24">
                <h1 
                x-ref="projectName"
                class="font-bold lg:text-5xl xl:text-6xl absolute xl:n-left-24 tracking-widest top-10 n-left-12 text-3xl md:text-4xl md:n-left-13">
                    {{ $project->name }}
                </h1>
            </div>
            <p class="pb-10 xl:w-9/12 lg:text-lg xl:text-xl xl:pt-4 3xl:w-7/12" :class="h1Height > 50 ? 'pt-8' : 'pt-0'">{{ $project->description }}</p>
            <div class="flex flex-col flex-wrap content-center w-full gap-y-4 justify-center xl:flex-row xl:gap-x-4 ">
                @foreach($project->getProjectImages() as $image)
                    <img class="rounded-md w-full md:w-9/12 xl:w-5/12" src="{{ $image }}" class="" />
                @endforeach
            </div>
        </div>
    </main>
@endsection