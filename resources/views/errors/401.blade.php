@extends('layouts.app')

@section('title', 'Error - 401')

@section('header')
    <x-header headerBgColor="bg-white"/>
@endsection()

@section('content')

<section class="flex content-center justify-center h-full px-8 bg-pink h-screen-80">
    <img class="w-full lg:w-9/12 xl:w-6/12 3xl:w-5/12" src="/images/doodles/404.svg" />
</section>

@endsection