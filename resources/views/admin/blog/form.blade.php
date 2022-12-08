<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Post
        </h2>
    </x-slot>

     <form class="flex relative flex-col gap-y-2 w-full sm:w-9/12 lg:w-6/12 xl:w-5/12 2xl:w-4/12 3xl:w-3/12 4xl:w-3/12 xl:pr-8 mx-auto mt-10" method="POST" action="{{ route('blog.store') }}">
                @csrf
                <label class="text-lg font-medium mb-4" for="title">
                    <span class="block">
                        Title
                        <span class="text-red-600">*</span>
                    </span>
                    <input 
                        class="font-normal target focus:ring-green rounded-sm w-full @error('title') ring-red-600 ring-2 @enderror" 
                        type="text" 
                        name="title" 
                        required 
                        value="{{ old('title') }}">
                        @error('title')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                </label>

                <label class="text-lg font-medium mb-4" for="cover_image">
                    <span class="block">
                        Cover Image
                        <span class="text-red-600">*</span>
                    </span>
                    <input 
                        class="font-normal focus:ring-green rounded-sm w-full @error('cover_image') ring-red-600 ring-2 @enderror" 
                        type="file" 
                        name="cover_image" 
                        required
                        value="{{ old('cover_image') }}">
                        @error('cover_image')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                </label>

                <label class="text-lg font-medium mb-4" for="content">
                    Content
                    <input 
                        class="font-normal focus:ring-green rounded-sm w-full @error('content') ring-red-600 ring-2 @enderror" 
                        type="tel" 
                        name="phone"
                        value="{{ old('phone') }}">
                        @error('phone')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                </label>

                <label class="text-lg font-medium mb-4" for="message">
                    <span class="block">
                        Message
                        <span class="text-red-600">*</span>
                    </span>
                    <textarea 
                        class="font-normal   focus:ring-green rounded-sm w-full @error('message') ring-red-600 ring-2 @enderror" 
                        name="message" 
                        rows="4"
                        required 
                        autocapitalize=sentence 
                        resize=none>
                        {{ old('message') }}
                    </textarea>
                    @error('message')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </label>
                <div class="flex items-center text-center h-12">
                    @if (!session('success'))
                        <input
                            class="bg-blue-700 text-white w-28 px-5 py-3 mt-4 rounded-sm font-medium cursor-pointer hover:bg-blue-800" 
                            type="submit" 
                            value="Send"
                        >
                    @else
                        <div class="w-full" x-data="{ animate: false }" x-init="$nextTick(() => { animate = true })">
                            <p class="text-green font-bold text-xl w-full" x-show="animate" 
                                x-transition:enter="transition ease-out duration-500"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90">
                                Message sent!
                            </p>
                        </div>
                    @endif
                </div>
            </form>
</x-app-layout>
