<div class="flex xl:hidden">
    <div class="flex cursor-pointer" @click="open = ! open; window.scrollTo({top: 0})">
        {{ $trigger }}
    </div>

    <div class="absolute top-0 left-0 z-50 w-screen h-screen" 
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95">
        {{ $slot }}
    </div>
</div>