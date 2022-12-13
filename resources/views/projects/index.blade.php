@extends('layouts.app')

@section('title', 'Contact')

@section('header')
    <x-header headerBgColor="bg-white"/>
@endsection()

@section('content')
    <main class="flex flex-row-reverse">
        <div class="bg-pink flex flex-wrap xl:p-20 p-6 pb-96 xl:w-10/12 2xl:w-9/12 3xl:w-5/6 xl:py-44 xl:items-end w-11/12 lg:w-10/12 relative rounded-md">
            <h1 class="font-bold sm:text-4xl sm:n-left-8 absolute tracking-widest md:top-40-tenth top-10 n-left-4 text-3xl xl:text-5xl">Projects</h1>
            <img class="absolute right-0 top-22 sm:w-80 sm:top-12-fifth md:n-scale-1 md:left-126px w-64 md:w-80 xl:w-96 xl:left-178px xl:top-30px" src="/images/doodles/projects.svg" alt="Graphical representation of me."/>
            <div class="mt-52 sm:mt-72 flex gap-y-8 flex-col w-full items-center justify-center lg:flex-row lg:gap-x-8 xl:mt-40-two-fifth flex-wrap">
                @foreach($projects as $project)
                    <x-project :project="$project" />
                @endforeach
            </div>
        </div>
    </main>    
@endsection