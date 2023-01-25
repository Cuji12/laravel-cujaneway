@props([
    'image',
    'project'
])
<div class="absolute hidden w-screen h-screen bg-red">
</div>

 <img
    src="{{ $image }}"
    x-data="{ enlarge: false }"
    x-on:click="enlarge = ! enlarge; console.log(enlarge)"
    x-on:click.outside="enlarge = false"
    x-bind:class="{'scale-test z-10 absolute': enlarge}"

    @class([
    'relative',
    'transition',
    'duration-300',
    'ease-out',
    'transform',
    'w-full',
    'rounded-md',
    'md:w-9/12',
    'xl:w-4/12',
    '2xl:w-3/12' => ! $project->portrait_images,
    '3xl:w-2/12' => ! $project->portrait_images,
    'scale-50' => ! 'enlarge'
    ])
    />