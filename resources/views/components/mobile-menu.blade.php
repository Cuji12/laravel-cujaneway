
<div class="relative top-0 left-0 items-center justify-center hidden w-full h-full bg-pink" x-data="{ hidePopOut: true }" x-bind:class="hidePopOut ? 'flex-important' : ''">
    <div class="absolute w-10 h-10 text-5xl cursor-pointer top-5 right-8 text-green" @click="open = false">
        <hr class="absolute left-0 w-10 origin-center rotate-45 border-2 border-green rounded-xl top-4" />
        <hr class="absolute left-0 w-10 origin-center border-2 border-green rounded-xl rotate-315 top-4" />
    </div>
    <nav>
        <ul class="flex flex-col text-4xl font-bold text-center gap-y-10">
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