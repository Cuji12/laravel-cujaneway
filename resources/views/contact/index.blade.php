@extends('layouts.app')

@section('title', 'Contact')

@section('header')
    <x-header headerBgColor="bg-pink"/>
@endsection()

@section('content')
    <x-page-title title="Get in touch" lgWidth="lg:w-6/12"/>
    <main>
        <div class="flex flex-col w-full items-center xl:flex-row xl:justify-center gap-y-12 p-8">
            <form id="contact-form" class="flex relative flex-col gap-y-2 w-full sm:w-9/12 lg:w-6/12 xl:w-5/12 2xl:w-4/12 3xl:w-3/12 4xl:w-3/12 5xl:w-2/12 xl:pr-8" method="POST" action="{{ route('contact.post') }}">
                @csrf
                <label class="text-lg font-medium mb-4" for="name">
                    <span class="block">
                        Name
                        <span class="text-red-600">*</span>
                    </span>
                    <input 
                        class="font-normal border-0 bg-sky-blue target focus:ring-green rounded-sm w-full @error('name') ring-red-600 ring-2 @enderror" 
                        type="text" 
                        name="name" 
                        required 
                        autocapitalize=words 
                        value="{{ old('name') }}">
                        @error('name')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                </label>

                <label class="text-lg font-medium mb-4" for="email">
                    <span class="block">
                        Email
                        <span class="text-red-600">*</span>
                    </span>
                    <input 
                        class="font-normal border-0 bg-sky-blue focus:ring-green rounded-sm w-full @error('email') ring-red-600 ring-2 @enderror" 
                        type="email" 
                        name="email" 
                        required
                        value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                </label>

                <label class="text-lg font-medium mb-4" for="email">
                    Phone
                    <input 
                        class="font-normal border-0 bg-sky-blue focus:ring-green rounded-sm w-full @error('phone') ring-red-600 ring-2 @enderror" 
                        type="tel" 
                        name="phone"
                        value="{{ old('phone') }}">
                        @error('phone')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                </label>

                <label class="text-lg font-medium mb-4" for="message">
                    <span class="block">
                        Message
                        <span class="text-red-600">*</span>
                    </span>
                    <textarea 
                        class="font-normal border-0 bg-sky-blue focus:ring-green rounded-sm w-full @error('message') ring-red-600 ring-2 @enderror" 
                        name="message" 
                        rows="4"
                        required 
                        autocapitalize=sentence 
                        resize=none>
                        {{ old('message') }}
                    </textarea>
                    @error('message')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </label>
                <div class="flex items-center text-center h-12">
                    @if (!session('success'))
                        <input
                            class="bg-charcoal text-white w-28 px-5 py-3 mt-4 rounded-sm font-medium cursor-pointer hover:bg-green" 
                            type="submit" 
                            value="Send"
                            data-sitekey="reCAPTCHA_site_key" 
                            data-callback='onSubmit' 
                            data-action='submit'
                        >
                    @else
                        <div class="w-full" x-data="{ animate: false }" x-init="$nextTick(() => { animate = true })">
                            <p class="text-green font-bold text-xl w-full" x-show="animate" 
                                x-transition:enter="transition ease-out duration-500"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90">
                                Message sent!
                            </p>
                        </div>
                    @endif
                </div>
            </form>
            @if (!session('success'))
                <img class="w-full sm:w-9/12 lg:w-6/12 xl:w-4/12 2xl:w-4/12 3xl:w-3/12 4xl:w-2/12 xl:pl-8" src="/images/doodles/contact.svg" alt="Hello from me">
            @else
                <img class="w-full sm:w-9/12 lg:w-6/12 xl:w-4/12 2xl:w-4/12 3xl:w-3/12 4xl:w-2/12 xl:pl-8" src="/images/doodles/contact-sent.svg" alt="I'll be in touch!">
            @endif
        </div>
    </main>

    <script>
        function onSubmit(token) {
            document.getElementById("contact-form").submit();
        }
    </script>
@endsection