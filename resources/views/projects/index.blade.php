@extends('layouts.app')

@section('title', 'Projects')
@section('description', 'Some of the projects I\'ve worked on over the years.')
@section('author', 'Cu Janeway')

@section('header')
    <x-header headerBgColor="bg-white"/>
@endsection()

@section('content')
    <main class="relative flex flex-row-reverse">
        <div class="relative flex flex-wrap w-11/12 p-6 rounded-md bg-pink xl:p-20 pb-96 xl:w-10/12 2xl:w-9/12 3xl:w-9/12 xl:py-44 xl:items-end lg:w-10/12">
            <h1 class="absolute text-3xl font-bold tracking-widest sm:text-4xl sm:n-left-8 md:top-40-tenth top-10 n-left-4 xl:text-5xl">Projects</h1>
            <img class="absolute right-0 w-64 top-22 sm:w-80 sm:top-12-fifth md:n-scale-1 md:left-126px md:w-80 xl:w-96 xl:left-178px xl:top-30px" src="/images/doodles/projects.svg" alt="Graphical representation of me."/>
            <div class="flex flex-col flex-wrap items-center justify-center w-full max-w-screen-md mx-auto sm:w-9/12 mt-52 sm:mt-72 lg:mt-80 lg:flex-row xl:mt-48">
                @foreach($projects as $project)
                    <x-project :project="$project" />
                @endforeach
            </div>
            <img src="/images/doodles/projects-squares-mobile.svg" alt="Tree" class="absolute bottom-20 w-72 xl:hidden">
            <img src="/images/doodles/projects-squares-desktop.svg" alt="Tree" class="absolute hidden bottom-20 n-left-52 w-72 xl:block 4xl:w-80">
        </div>
    </main>
@endsection
