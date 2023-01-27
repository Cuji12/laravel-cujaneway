@props([
    'image',
    'project'
])
<div
    @class([
        'md:w-9/12',
        'xl:w-5/12',
        '2xl:w-3/12' => $project->portrait_images,
        '3xl:w-2/12' => $project->portrait_images,
 ])>
    <img
        class="cursor-pointer w-full rounded-md relative project-image"
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
              '3xl:w-2/12' => $project->portrait_images,
          ])
    >
    </div>
</div>
