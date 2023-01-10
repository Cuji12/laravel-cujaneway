@php
    
@endphp

@extends('layouts.app')

@section('title') {{ $project->name }}@endsection

@section('header')
    <x-header headerBgColor="bg-white"/>
@endsection()

@section('content')
    <main class="flex flex-row-reverse">
        <div 
        class="relative flex flex-col w-11/12 p-6 rounded-md bg-pink pb-96 xl:w-11/12 3xl:w-5/6 lg:w-9/12" 
        x-data="{ h1Height: $refs.projectName.getBoundingClientRect().height }">
            <div class="relative h-24">
                <h1 
                x-ref="projectName"
                class="absolute text-3xl font-bold tracking-widest lg:text-5xl xl:text-6xl xl:n-left-24 top-10 n-left-12 md:text-4xl md:n-left-13">
                    {{ $project->name }}
                </h1>
            </div>
            <p class="mb-6 xl:w-9/12 lg:text-lg xl:text-xl xl:pt-4 3xl:w-7/12" :class="h1Height > 50 ? 'pt-8' : 'pt-0'">{{ $project->description }}</p>
            @if (isset($project->url))
                <a target="_blank" class="px-5 py-2 mt-4 mb-10 font-medium text-white rounded-sm cursor-pointer bg-green w-28 hover:bg-darker-green" href="{{ $project->url }}">Visit Site</a>
            @endif
            <div class="flex flex-col flex-wrap content-center justify-center w-full gap-y-4 xl:flex-row xl:gap-x-4 ">
                @foreach($project->getProjectImages() as $image)
                    @if ($project->portrait_images == true) 
                        <img class="w-full rounded-md md:w-9/12 xl:w-4/12 2xl:w-3/12 3xl:w-2/12" src="{{ $image }}" class="" />
                    @else 
                        <img class="w-full rounded-md md:w-9/12 xl:w-5/12" src="{{ $image }}" class="" />
                    @endif
                @endforeach
            </div>
            <img src="/images/doodles/projects-squares-mobile.svg" alt="Tree" class="absolute bottom-20 w-72 xl:hidden">
            <img src="/images/doodles/projects-squares-desktop.svg" alt="Tree" class="absolute hidden bottom-20 n-left-24 w-72 xl:block 3xl:n-left-52 4xl:w-80">
        </div>
    </main>
@endsection