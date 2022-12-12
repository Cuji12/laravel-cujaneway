@extends('layouts.app-client')

@section('title', 'Blog')

@section('header')
    <x-header headerBgColor="bg-pink"/>
@endsection()

@section('content')
    <x-page-title title="{{ $post->title }}"/>
    <main>
    </main>
@endsection