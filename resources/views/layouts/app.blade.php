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
        <header class="flex xl:justify-between xl:content-center xl:h-24 xl:px-12">
            <img src="/images/logo.png" alt="Website Logo." class="h-full"/>
            <nav class="flex">
                <ul class="flex xl:items-center xl:justify-evenly xl:w-96">
                    <li>
                        <a href="@php(route('blog.index'))">Blog</a>
                    </li>
                    <li>
                        <a href="@php(route('projects.index'))">Projects</a>
                    </li>
                    <li>
                        <a href="@php(route('contact.index'))">Contact</a>
                    </li>
                    <li class="text-green">
                        <a href="mailto:hello@cujaneway.co.uk">
                            hello@cujaneway.co.uk
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="container">
            @yield('content')
        </div>

        <footer>
            <div class="">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/blog">Blog</a>
                    </li>
                    <li>
                        <a href="/projects">Projects</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
             <div class="">
                <ul>
                    <li>
                        <a href="https://github.com/Cuji12">GitHub</a>
                    </li>
                    <li>
                        <a href="https://www.peopleperhour.com/freelancer/technology-programming/cu-janeway-full-stack-web-developer-designer-zqjnqxa">PeoplePerHour</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/cujaneway/">LinkedIn</a>
                    </li>
                    <li>
                        <a href="https://stackoverflow.com/users/20600516/cu-janeway">Stack Overflow</a>
                    </li>
                </ul>
            </div>
            <div>
                <a href="mailto:hello@cujaneway.co.uk">
                    hello@cujaneway.co.uk
                </a>
            </div>
            <p class="">
                Copyright &copy; Cu Janeway @php echo date('Y'); @endphp
                <a class="underline" href="/about-this-site">More about this website</a>
            </p>
        </footer>
    </body>
</html>
