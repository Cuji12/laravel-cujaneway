
<div class="hidden justify-center items-center top-0 left-0 bg-pink w-full h-full relative" x-data="{ hidePopOut: true }" x-bind:class="hidePopOut ? 'flex-important' : ''">
    <div class="absolute top-5 right-8 text-5xl text-green cursor-pointer w-10 h-10" @click="open = false">
        <hr class="border-green border-2 rounded-xl rotate-45 absolute top-4 left-0 w-10 origin-center" />
        <hr class="border-green border-2 rounded-xl rotate-315 absolute top-4 left-0 w-10 origin-center" />
    </div>
    <nav>
        <ul class="flex gap-y-10 flex-col font-bold text-4xl text-center">
            <li>
                <a class="hover:text-green active:text-green" href="{{ route('site.index') }}">Home</a>
            </li>
              <li>
                <a class="hover:text-green active:text-green" href="{{ route('blog.index') }}">Blog</a>
            </li>
              <li>
                <a class="hover:text-green active:text-green" href="{{ route('projects.index') }}">Projects</a>
            </li>
              <li>
                <a class="hover:text-green active:text-green" href="{{ route('contact.index') }}">Contact</a>
            </li>
        </ul>
        <img class="absolute n-bottom-40 w-96 n-translate-x-50 left-2/4" src="/images/doodles/mobile-menu.svg" alt="Me watching I suppose?"/>
    </nav>
</div>