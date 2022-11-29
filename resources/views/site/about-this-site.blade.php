@extends('layouts.app')

@section('title', 'About this site')

@section('header')
    <x-header headerBgColor="bg-pink"/>
@endsection()

@section('content')
    <section class="flex justify-center bg-pink p-5 pt-72 pb-12">
        <div class="w-5/6">
            <h1 class="xl:text-5xl font-bold tracking-wider">About This Site</h1>
        </div>
    </section>
@endsection()
