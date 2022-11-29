<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cu Janeway - @yield('title')</title>
        <!-- Styles -->
        @vite(['resources/css/app.css'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
        @yield('header')

        <div>
            @yield('content')
        </div>

        <footer class="flex w-full h-96 p-6 xl:mx-auto flex-wrap xl:h-40 gap-y-12 mt-20 text-xl">
            <div class="flex-auto w-3/6 xl:w-1/3">
                <ul class="flex flex-col gap-y-2">
                    <li>
                        <a class="hover:text-green" href="{{ route('site.index') }}">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-green" href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    <li>
                        <a class="hover:text-green" href="{{ route('projects.index') }}">Projects</a>
                    </li>
                    <li>
                        <a class="hover:text-green" href="{{ route('contact.index') }}">Contact</a>
                    </li>
                </ul>
            </div>
             <div class="flex-auto w-3/6 xl:w-1/3">
                <ul class="flex flex-col gap-y-2">
                    <li>
                        <a class="hover:text-green" href="https://github.com/Cuji12">GitHub</a>
                    </li>
                    <li>
                        <a class="hover:text-green" href="https://www.peopleperhour.com/freelancer/technology-programming/cu-janeway-full-stack-web-developer-designer-zqjnqxa">PeoplePerHour</a>
                    </li>
                    <li>
                        <a class="hover:text-green" href="https://www.linkedin.com/in/cujaneway/">LinkedIn</a>
                    </li>
                    <li>
                        <a class="hover:text-green" href="https://stackoverflow.com/users/20600516/cu-janeway">Stack Overflow</a>
                    </li>
                </ul>
            </div>
            <div class="flex-auto w-full xl:w-1/3">
                <a class="text-green" href="mailto:hello@cujaneway.co.uk">
                    hello@cujaneway.co.uk
                </a>
            </div>
            <p class="w-full text-sm xl:text-lg text-slate-500 pb-4">
                Copyright &copy; Cu Janeway {{ date('Y') }}
                <a class="underline" href="/about-this-site">More about this website</a>
            </p>
        </footer>
    </body>
</html>
