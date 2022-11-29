@props([
    'headerBgColor'
])

<header class="flex justify-between content-center h-20 xl:h-24 xl:px-12 px-8 {{ $headerBgColor }}">
    <a href="@php(route('site.index'))">
        <img src="/images/logo.png" alt="Website Logo." class="h-full"/>
    </a>
    <nav class="hidden xl:flex">
        <ul class="flex xl:items-center xl:justify-evenly xl:w-128 font-bold xl:text-xl">
            <li>
                <a class="hover:text-green" href="{{ route('blog.index') }}">Blog</a>
            </li>
            <li>
                <a class="hover:text-green" href="{{ route('projects.index')}}">Projects</a>
            </li>
            <li>
                <a class="hover:text-green" href="{{ route('contact.index') }}">Contact</a>
            </li>
            <li class="text-green">
                <a href="mailto:hello@cujaneway.co.uk">
                    hello@cujaneway.co.uk
                </a>
            </li>
        </ul>
    </nav>
</header>