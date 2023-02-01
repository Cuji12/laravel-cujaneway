@extends('layouts.app')

@section('title'){{ $project->name }}@endsection
@section('meta_description'){{ $project->meta_description }}@endsection

@section('header')
    <x-header headerBgColor="bg-white" />
@endsection()

@section('content')
    <img alt="Project image" src="" class="hidden fixed z-20" id="animation-image"/>
    <main id="main" class="flex flex-row-reverse">
        <div
        class="relative flex flex-col w-11/12 p-6 rounded-md bg-pink pb-96 xl:w-11/12 3xl:w-5/6 lg:w-9/12"
        x-data="{ h1Height: $refs.projectName.getBoundingClientRect().height }">
            <h1
                x-ref="projectName"
                class="relative text-4xl font-bold tracking-widest lg:text-5xl xl:text-6xl xl:n-left-18 top-10 sm:n-left-12 md:text-4xl md:n-left-13">
                    {{ $project->name }}
            </h1>
            <p class="xl:w-9/12 lg:text-lg xl:text-xl max-w-3xl mt-12">{{ $project->description }}</p>
            @if (isset($project->url))
                <a target="_blank" class="px-5 py-2 mt-4 mb-4 font-medium text-white rounded-sm cursor-pointer bg-green w-28 hover:bg-darker-green" href="{{ $project->url }}">Visit Site</a>
            @endif
            <div class="flex flex-col flex-wrap content-center justify-center w-full mt-6 gap-y-4 xl:flex-row xl:gap-x-4">
                @foreach($project->getProjectImages() as $image)
                    <x-project-image :image="$image" :project="$project" />
                @endforeach
            </div>
            <img src="/images/doodles/projects-squares-mobile.svg" alt="Tree" class="absolute bottom-20 w-68 max-w-full xl:hidden">
            <img src="/images/doodles/projects-squares-desktop.svg" alt="Tree" class="absolute hidden bottom-20 n-left-24 w-72 xl:block 3xl:n-left-52 4xl:w-80">
        </div>
    </main>
@endsection

<script>
    let imageScale = 1;
    let image;
    let mainElement;
    let headerElement;
    let projectImages;

    window.onload = function () {
        image = document.getElementById('animation-image');
        mainElement = document.getElementById('main');
        headerElement = document.getElementById('header');
        projectImages = document.querySelectorAll('.project-image');

        const resizeObserver = new ResizeObserver((entries) => {
            for (const entry of entries) {
                console.log(entry.contentRect.width);
                if (entry.contentRect.width <= 320) { imageScale = 1.2 }
                else if (entry.contentRect.width <= 640) { imageScale = 1.1 }
                else if (entry.contentRect.width <= 768) { imageScale = 1.1 }
                else if (entry.contentRect.width <= 1024) { imageScale = 1.5 }
                else if (entry.contentRect.width <= 1280) { imageScale = 1.8 }
                else if (entry.contentRect.width <= 1536) { imageScale = 2.4 }
                else if (entry.contentRect.width <= 1920) { imageScale = 2.5 }
                else { imageScale = 2.6 }
            }
        });

        resizeObserver.observe(document.querySelector('body'));
    }

    function toggleAnimationOn(e) {
            projectImages.forEach(element => {
                element.classList.add('pointer-events-none');
            });

            image.style.top = e.target.y;
            image.style.left = e.target.x;
            image.src = e.target.src;
            image.height = e.target.height;
            image.width = e.target.width;
            image.classList.remove('hidden');

            mainElement.animate([
                {filter: 'grayscale(0) blur(0)'},
                {filter: 'grayscale(1) blur(1rem)'}
            ], {
                duration: 500,
                fill: 'forwards',
                easing: 'ease-in-out'
            });
            headerElement.animate([
                {filter: 'grayscale(0) blur(0)'},
                {filter: 'grayscale(1) blur(1rem)'}
            ], {
                duration: 500,
                fill: 'forwards',
                easing: 'ease-in-out'
            });
            image.animate([
                {transform: `translate(0%, 0%) scale(1)`, top: `${e.target.y}px`, left: `${e.target.x}px`},
                {transform: `translate(-50%, -50%) scale(${imageScale})`, top: '50%', left: '50%'}
            ], {
                duration: 500,
                fill: 'forwards',
                easing: 'ease-in-out'
            });

            e.target.id = 'activeImage';
            image.setAttribute('enlarge', 'true');
            image.setAttribute('triggered', 'false');
        }

        function toggleAnimationOff() {
            let image = document.getElementById('animation-image');

            if (document.getElementById('activeImage') && image.getAttribute('triggered') == 'false') {
                let activeImage = document.getElementById('activeImage');

                mainElement.animate([
                    {filter: 'grayscale(1) blur(1rem)'},
                    {filter: 'grayscale(0) blur(0)'}
                ], {
                    duration: 500,
                    fill: 'forwards',
                    easing: 'ease-in-out'
                });
                headerElement.animate([
                    {filter: 'grayscale(1) blur(1rem)'},
                    {filter: 'grayscale(0) blur(0)'}
                ], {
                    duration: 500,
                    fill: 'forwards',
                    easing: 'ease-in-out'
                });
                image.animate([
                    {transform: `translate(-50%, -50%) scale(${imageScale})`, top: '50%', left: '50%'},
                    {transform: `translate(0%, 0%) scale(1)`, top: `${activeImage.y}px`, left: `${activeImage.x}px`}
                ], {
                    duration: 500,
                    fill: 'forwards',
                    easing: 'ease-in-out'
                }).onfinish = toggleAnimationClasses;

                image.setAttribute('enlarge', 'false');
                image.setAttribute('triggered', 'true');
            }
        }

        function toggleAnimationClasses() {
            let activeImage = document.getElementById('activeImage');

            if (image.getAttribute('enlarge') == 'false') {
                activeImage.id = '';
                image.classList.remove('enlarge-animation');
                image.classList.add('hidden');
                image.setAttribute('enlarge', 'unset');

                projectImages.forEach(element => {
                    element.classList.remove('pointer-events-none');
                });
            }
        }
</script>
