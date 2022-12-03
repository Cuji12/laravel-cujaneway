@extends('layouts.app-client')

@section('title', 'Contact')

@section('header')
    <x-header headerBgColor="bg-pink"/>
@endsection()

@section('content')
    <section>
       <div class="bg-pink w-full sm:flex sm:justify-center">
            <h1 class="font-bold tracking-wider text-2xl p-8 pt-20 pb-6 w-full sm:w-9/12 sm:px-0 lg:w-6/12 xl:w-5/12 2xl:w-7/12 2xl:mr-24 3xl:w-5/12 4xl:w-4/12 4xl:text-3xl">Get in touch</h1>
        </div>
        <div class="flex flex-col w-full items-center 2xl:flex-row 2xl:justify-center 2xl:gap-x-24">
            <form class="flex flex-col py-8 gap-y-2 w-full sm:w-9/12 lg:w-6/12 xl:w-5/12 2xl:w-4/12 3xl:w-3/12 4xl:w-2/12" method="POST" action="{{ route('contact.post') }}">
                @csrf
                <label class="text-lg font-medium" for="name">
                    <span class="block">
                        Name
                        <span class="text-red-600">*</span>
                    </span>
                    <input 
                        class="mb-4 border-none font-normal bg-sky-blue target focus:ring-green rounded-sm w-full @error('name') is-invalid @enderror" 
                        type="text" 
                        name="name" 
                        required 
                        autocapitalize=words 
                        value="{{ old('name') }}">
                </label>

                <label class="text-lg font-medium" for="email">
                    <span class="block">
                        Email
                        <span class="text-red-600">*</span>
                    </span>
                    <input 
                        class="mb-4 border-none font-normal bg-sky-blue focus:ring-green rounded-sm w-full invalid:border-red-500 @error('email') is-invalid @enderror" 
                        type="email" 
                        name="email" 
                        required
                        value="{{ old('email') }}">
                </label>

                <label class="text-lg font-medium" for="email">
                    Phone
                    <input 
                        class="mb-4 border-none font-normal bg-sky-blue focus:ring-green rounded-sm w-full invalid:border-red-500 @error('phone') is-invalid @enderror" 
                        type="tel" 
                        name="phone"
                        value="{{ old('phone') }}">
                </label>

                <label class="text-lg font-medium" for="message">
                    <span class="block">
                        Message
                        <span class="text-red-600">*</span>
                    </span>
                    <textarea 
                        class="mb-4 border-none font-normal bg-sky-blue focus:ring-green rounded-sm w-full invalid:border-red-500 @error('message') is-invalid @enderror" 
                        name="message" 
                        rows="4"
                        required 
                        autocapitalize=sentence 
                        resize=none
                        value="{{ old('message') }}">
                    </textarea>
                </label>
                <input 
                    class="bg-charcoal text-white w-28 px-5 py-3 rounded-sm font-medium cursor-pointer hover:bg-green" 
                    type="submit" 
                    value="Send">
            </form>
            <img class="w-full 2xl:w-3/12 3xl:w-2/12" src="/images/doodles/contact.svg" alt="Hello from me">
        </div>
    </section>
@endsection