@props([
    'image',
    'project'
])
<div
    @class([
        'max-w-12' => $project->portrait_images,
        'sm:w-5/12' => $project->portrait_images,
        'md:w-9/12',
        'xl:w-5/12',
        '2xl:w-3/12' => $project->portrait_images,
        '3xl:w-2/12' => $project->portrait_images,
 ])>
    <img
        class="cursor-pointer w-full rounded-md relative project-image hover:brightness-90 hover:drop-shadow-md"
        src="{{ $image }}"
        x-on:click.stop="toggleAnimationOn"
        x-on:click.outside="toggleAnimationOff"
    />

    <div
        @class([
              'hidden',
              'relative',
              'w-full',
              'rounded-md',
              'md:w-9/12',
              'xl:w-5/12',
              '2xl:w-3/12' => $project->portrait_images,
              '3xl:w-2/12' => $project->portrait_images
          ])
    >
    </div>
</div>
