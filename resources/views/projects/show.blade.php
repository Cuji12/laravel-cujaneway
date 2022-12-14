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
        class="bg-pink flex flex-col xl:p-20 p-6 pb-96 xl:w-10/12 2xl:w-9/12 3xl:w-4/6 xl:py-44 relative xl:items-end w-11/12 lg:w-9/12 rounded-md" 
        x-data="{ h1Height: $refs.projectName.getBoundingClientRect().height }">
            <div class="relative h-24">
                <h1 
                x-ref="projectName"
                class="font-bold xl:text-6xl absolute xl:top-20 xl:n-left-24 tracking-widest top-10 n-left-12 text-3xl md:text-4xl md:n-left-13">
                    {{ $project->name }}
                </h1>
            </div>
            <p class="pb-10" :class="h1Height > 36 ? 'pt-8' : 'pt-0'">{{ $project->description }}</p>
            <div class="flex flex-col content-center w-full gap-y-4">
                @foreach($project->getProjectImages() as $image)
                    <img class="rounded-md" src="{{ $image }}" class="" />
                @endforeach
            </div>
            <div class="relative pt-24">
                <h2 class="font-bold xl:text-6xl absolute xl:top-20 xl:n-left-24 tracking-widest top-10 n-left-12 text-3xl md:text-4xl md:n-left-13">Other Work</h2>
                <div class="flex flex-col content-center w-full gap-y-4">
                    @foreach($project->getRelatedProjects() as $relatedProject)
                        <x-project :project="$relatedProject" />
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection