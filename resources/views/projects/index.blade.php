@extends('layouts.app')

@section('title', 'Contact')

@section('header')
    <x-header headerBgColor="bg-white"/>
@endsection()

@section('content')
    <main class="flex flex-row-reverse md:flex-row">
        <div class="bg-pink flex flex-wrap xl:p-20 p-6 pb-96 xl:w-10/12 2xl:w-9/12 3xl:w-4/6 xl:py-44 xl:items-end w-11/12 lg:w-10/12 relative">
            <h1 class="font-bold sm:text-4xl sm:n-left-8 absolute tracking-widest top-10 n-left-4 text-3xl md:hidden">Projects</h1>
            <div class="absolute hidden md:block right-0 top-0">
                <h1 class="font-bold hidden relative md:inline xl:text-5xl xl:top-20 tracking-widest top-36-four-fifths text-4xl left-40 lg:left-48">Projects</h1>
                <img class="hidden md:block relative w-72 right-125px lg:right-93px" src="/images/doodles/projects.svg" alt="Graphical representation of me."/>
            </div>
            <img class="md:hidden absolute right-0 top-22 sm:w-80 sm:top-12-fifth lg:top-4 w-64 2xl:n-left-80 lg:w-96 md:w-80" src="/images/doodles/projects.svg" alt="Graphical representation of me."/>
            <div class="mt-52 sm:mt-72 flex gap-y-8 flex-col w-full items-center justify-center lg:flex-row lg:gap-x-8 lg:mt-76">
                @foreach($projects as $project)
                    <x-project :project="$project" />
                @endforeach
            </div>
        </div>
    </main>    
@endsection