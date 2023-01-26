@props([
    'image',
    'project'
])
<div class="absolute hidden w-screen h-screen bg-red">
</div>
<div
    x-data="{ enlarge: false }"
    @class([
        'md:w-9/12',
        'xl:w-5/12',
        '2xl:w-3/12' => $project->portrait_images,
        '3xl:w-2/12' => $project->portrait_images,
 ])>
    <img
    src="{{ $image }}"
    x-on:click="enlarge = ! enlarge"
    x-on:click.outside="enlarge = false"
    x-bind:class="{'scale-test': enlarge}"

    @class([
        'cursor-pointer',
        'relative',
        'w-full',
        'rounded-md',
        'scale-50' => ! 'enlarge'
    ])
    />

    <div
        x-bind:class="enlarge ? 'inline-block' : ''"
        @class([
              'hidden',
              'relative',
              'w-full',
              'rounded-md',
              'md:w-9/12',
              'xl:w-5/12',
              '2xl:w-3/12' => $project->portrait_images,
              '3xl:w-2/12' => $project->portrait_images,
          ])
    >
    </div>
</div>
