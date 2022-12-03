@extends('layouts.app-client')

@section('title', 'Home')

@section('header')
    <x-header headerBgColor="bg-white"/>
@endsection()

@section('content')

<section class="bg-pink h-full flex content-center justify-center px-8 h-screen-80">
    <img class="w-full lg:w-9/12 xl:w-6/12 3xl:w-5/12" src="/images/doodles/404.svg" />
</section>

@endsection