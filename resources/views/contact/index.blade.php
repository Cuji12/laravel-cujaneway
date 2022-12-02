@extends('layouts.app-client')

@section('title', 'About this site')

@section('header')
    <x-header headerBgColor="bg-pink"/>
@endsection()

@section('content')
    <section>
       <div class="bg-pink w-full sm:flex sm:justify-center">
            <h1 class="font-bold tracking-wider text-2xl p-8 pt-20 pb-6 sm:w-9/12 sm:px-0 4xl:text-3xl">About This Site</h1>
        </div>
        <form class="flex flex-col p-8" method="POST" action="{{ route('contact.post') }}">

            <label class="" for="name">Name</label>
            <input class="" type="text" name="name" required autocapitalize=words>

            <label class="" for="email">Email</label>
            <input class="" type="email" name="email" required>

            <label class="" for="email">Phone</label>
            <input class="" type="tel" name="phone">

            <label class="" for="message">Message</label>
            <textarea class="" name="message" autocapitalize=sentence></textarea>

            <input type="submit" value="Submit" required>
        </form>
    </section>
@endsection