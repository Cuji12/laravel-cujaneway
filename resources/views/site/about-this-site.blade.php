@extends('layouts.app')

@section('title', 'About this site')

@section('header')
    <x-header headerBgColor="bg-pink"/>
@endsection()

@section('content')
    <section class="flex flex-wrap ">
        <div class="w-full bg-pink sm:flex sm:justify-center">
            <h1 class="p-8 pt-20 pb-6 text-2xl font-bold tracking-wider sm:w-9/12 sm:px-0 lg:w-6/12 xl:w-5/12 2xl:w-4/12 4xl:w-3/12 4xl:text-3xl">About This Site</h1>
        </div>
        <div class="content-center p-8 sm:flex sm:flex-wrap sm:px-0 sm:flex-col">
            <h2 class="mb-1 text-lg font-bold sm:w-9/12 lg:w-6/12 xl:w-5/12 2xl:w-4/12 4xl:w-3/12 4xl:text-xl">Codebase and CMS</h2>
            <p class="mb-6 sm:w-9/12 lg:w-6/12 xl:w-5/12 2xl:w-4/12 4xl:w-3/12 4xl:text-lg">
                This portfolio is a fairly simple build using Laravel with an admin side setup to easily update the website. 
                It's all hosted in a public repository so by all means feel free to click the link below and check out how it's written. 
                If you're having a nosey and curious about deploying Docker images and transmorgifying them to Firecracker VMs in Fly, go check 
                out their website linked below &#128578;.
            </p>
            <h3 class="mb-1 text-lg font-bold sm:w-9/12 lg:w-6/12 xl:w-5/12 2xl:w-4/12 4xl:w-3/12 4xl:text-xl">More details:</h3>
            <ul class="list-disc list-inside marker:text-green sm:w-9/12 lg:w-6/12 xl:w-5/12 2xl:w-4/12 4xl:w-3/12 4xl:text-lg">
                <li>Designed in AdobeXD</li>
                <li>Code on <a class="underline hover:text-green" href="https://github.com/Cuji12/laravel-cujaneway">Github</a>
                </li>
                <li>Built with Laravel</li>
                <li>Deployed with <a class="underline hover:text-green" href="https://fly.io/">Fly.io</a> using Firecracker microVMs</li>
                <li>Styled with Tailwind</li>
            </ul>
        </div>
    </section>
@endsection()
