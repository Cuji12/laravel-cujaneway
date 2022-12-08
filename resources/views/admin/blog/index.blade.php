<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Blog
        </h2>
    </x-slot>
    <div class="flex flex-col mt-10 w-9/12 mx-auto gap-y-4">
        <table class="border-collapse table-auto w-full text-md">
            <thead>
                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">ID</th>
                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Title</th>
                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Content</th>
                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Created</th>
                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Last Updated</th>
            </thead>
            <tbody class="bg-white dark:bg-slate-800">
                @foreach ($posts as $post)
                    <x-admin-blog-post 
                        id="{{ $post->id }}"    
                        title="{{ $post->title }}"    
                        content="{{ $post->content }}"    
                        created_at="{{ $post->created_at }}"    
                        updated_at="{{ $post->updated_at }}"    
                    />
                @endforeach
            </tbody>
        </table>
        <a class="bg-blue-700 px-4 py-2 border-sm text-white font-bold self-end hover:bg-blue-800" href="{{ route('blog.create') }}">
            Create Post
        </a>
    </div>
</x-app-layout>
