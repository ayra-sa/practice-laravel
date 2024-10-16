<header class="p-5">
    <nav>
        <div class="container">
            <div class="flex w-full justify-between items-center">
                <a href="/" class="text-4xl font-bold">App</a>

                <ul class="flex items-center gap-5">
                    <li>
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="/posts" :active="request()->is('posts')">Posts</x-nav-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>