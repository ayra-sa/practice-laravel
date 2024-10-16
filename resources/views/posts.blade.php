<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <form action="" class="flex items-center mt-10 mb-20 justify-center gap-x-3">
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <input type="search" name="search" id="search" placeholder="Search here" class="border border-slate-300 px-5 py-2 rounded-md w-1/3">
        <button type="submit" class="bg-blue-500 px-5 py-2 font-semibold text-white rounded-md">Search</button>
    </form>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7 mb-10">
        @foreach ($posts as $post)
            <article class="shadow-md p-5 rounded-xl">
                <h2 class="text-xl mb-2">{{ $post['title'] }}</h2>
                <div class="flex items-center gap-x-2">
                    <a href="/posts?author={{ $post->author->username }}" class="hover:underline">{{ $post->author['name'] }}</a>
                    <p>|</p>
                    <p>{{ $post['created_at']->diffForHumans() }}</p>
                </div>
    
                <p class="my-3">{{ $post['body'] }}</p>
                <a href="/posts/{{ $post['slug'] }}" class="hover:underline">Read more &raquo;</a>
            </article>
        @endforeach
    </div>

    <div class="my-10">
        {{ $posts->links() }}
    </div>

</x-layout>