<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div>
        <a href="{{ route('posts', ['page' => request()->get('page', 1)]) }}" class="text-blue-500 mb-2 block">&laquo; Back to posts</a>
        <div class="border-b border-b-slate-200 pb-4 mb-10">
            <b>{{ $post->author->name }}</b>
            <p class="text-sm">{{ $post->created_at->diffForHumans() }}</p>
        </div>
        <p>{{ $post->body }}</p>
    </div>

    <div class="mt-10 flex items-start justify-between">
        @if ($previousPost)
            <div class="border p-5 rounded-md">
                <p>Previous</p>
                <a href="/posts/{{ $previousPost->slug }}" class="hover:underline font-semibold text-xl">{{ $previousPost->title }}</a>
            </div>
            @else
            <span></span>
        @endif

        @if ($nextPost)
            <div class="border p-5 rounded-md">
                <p>Next</p>
                <a href="/posts/{{ $nextPost->slug }}" class="hover:underline font-semibold text-xl">{{ $nextPost->title }}</a>
            </div>
        @else
            <span></span>
        @endif
    </div>
</x-layout>
