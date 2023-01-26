<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        @if(isset($blogPostCss))
        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/css/blogPost.css', 'resources/js/app.js'])
        @else
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="/favicon.png">
    </head>
    <body class="relative min-h-screen antialiased pb-96 lg:pb-72" x-data="{ open: false }" x-bind:class="open ? 'overflow-hidden' : ''">
        @yield('header')

        @yield('content')

        <footer class="absolute bottom-0 w-full">
            <div class="flex flex-wrap justify-between p-6 mx-auto text-xl max-w-112 xl:max-w-160 gap-y-6">
                <div class="xl:w-2/6">
                    <ul class="flex flex-col gap-y-2 ">
                        <li>
                            <a class="hover:text-green active:text-green" href="{{ route('site.index') }}">Home</a>
                        </li>
                        <li>
                            <a class="hover:text-green active:text-green" href="{{ route('blog.index') }}">Blog</a>
                        </li>
                        <li>
                            <a class="hover:text-green active:text-green" href="{{ route('projects.index') }}">Projects</a>
                        </li>
                        <li>
                            <a class="hover:text-green active:text-green" href="{{ route('contact.index') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="xl:w-2/6">
                    <ul class="flex flex-col gap-y-2 ">
                        <li>
                            <a class="hover:text-green active:text-green" target="_BLANK" href="https://github.com/Cuji12">GitHub</a>
                        </li>
                        <li>
                            <a class="hover:text-green active:text-green" target="_BLANK" href="https://www.peopleperhour.com/freelancer/technology-programming/cu-janeway-full-stack-web-developer-designer-zqjnqxa">PeoplePerHour</a>
                        </li>
                        <li>
                            <a class="hover:text-green active:text-green" target="_BLANK" href="https://www.linkedin.com/in/cujaneway/">LinkedIn</a>
                        </li>
                        <li>
                            <a class="hover:text-green active:text-green" target="_BLANK" href="https://stackoverflow.com/users/20600516/cu-janeway">Stack Overflow</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full xl:w-2/6">
                    <a class="text-green" href="mailto:hello@cujaneway.co.uk">
                        hello@cujaneway.co.uk
                    </a>
                </div>
                <p class="w-full text-sm xl:text-md text-slate-500">
                    Copyright &copy; Cu Janeway {{ date('Y') }}
                    <a class="underline" href="/about-this-site">More about this website</a>
                </p>
            </div>
        </footer>
        <p class="hidden 5xl:block 5xl:text-center">
            Well don't you have a rather high resolution screen? Look, I can only write so many custom breakpoints in Tailwind you'll have to deal with it looking not so good!
        </p>
    </body>
</html>