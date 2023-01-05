@props([
    'title',
    'lgWidth'
])
<div class="w-full px-8 bg-pink sm:flex sm:justify-center">
    <h1 class="font-bold tracking-wider items-center justify-center text-3xl pt-20 pb-6 w-full sm:w-9/12 {{ $lgWidth }} xl:w-9/12 sm:text-3xl 2xl:w-8/12 3xl:w-6/12 4xl:w-5/12 3xl:text-4xl 5xl:w-4/12">{{ $title }}</h1>
</div>