@props([
    'headerBgColor'
])

<header id="header" class="flex justify-between items-center h-20 xl:h-24 xl:px-12 px-8 5xl:justify-around {{ $headerBgColor }}">
    <a href="{{route('site.index') }}">
        <img class="logo" src="/images/logo.png" alt="Website Logo." class="h-full"/>
    </a>
    <nav class="hidden xl:flex">
        <ul class="flex font-bold xl:items-center xl:justify-evenly xl:text-xl">
           <li class="mx-2">
                <a class="hover:text-green active:text-green" href="{{ route('site.index') }}">Home</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-green active:text-green" href="{{ route('blog.index') }}">Blog</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-green active:text-green" href="{{ route('projects.index')}}">Projects</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-green active:text-green" href="{{ route('contact.index') }}">Contact</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-green active:text-green" href="{{ route('site.cv') }}">CV</a>
            </li>
            <li class="ml-5 text-green">
                <a href="mailto:hello@cujaneway.co.uk">
                    hello@cujaneway.co.uk
                </a>
            </li>
        </ul>
    </nav>
    <x-menu>
        <x-slot:trigger>
            <div class="flex flex-col content-center justify-center w-10 gap-y-2">
                <hr class="border-2 border-green rounded-xl" />
                <hr class="border-2 border-green rounded-xl" />
                <hr class="border-2 border-green rounded-xl" />
            </div>
        </x-slot>
        <x-mobile-menu />
    </x-menu>
</header>
