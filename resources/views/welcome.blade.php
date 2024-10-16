<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet maxime, ad laudantium fugiat voluptatem, temporibus sed eum, facilis adipisci odit asperiores? Sunt, nihil quia? Fugiat incidunt ratione sed quidem omnis.</p>

    <div class="mt-10">
        <div class="flex items-center justify-between mb-5">
            <h2 class="text-2xl">Posts</h2>
            <a href="/posts" class="hover:underline">See more</a>
        </div>

        <div class="grid grid-cols-3 gap-5">
            @foreach ($latestPosts as $post)
            <article class="shadow-md p-5 rounded-xl">
                <h2 class="text-xl mb-2">{{ $post->title }}</h2>
                <div class="flex flex-col gap-x-2">
                    <a href="/posts?author={{ $post->author->username }}" class="hover:underline">{{ $post->author['name'] }}</a>
                    <p class="text-sm">{{ $post->created_at->diffForHumans() }}</p>
                </div>
    
                <p class="my-3">{{ $post->body }}</p>
                <a href="/posts/{{ $post->slug }}" class="hover:underline">Read more &raquo;</a>
            </article>
            @endforeach
        </div>
    </div>
</x-layout>