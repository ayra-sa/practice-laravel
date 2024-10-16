<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-banner>Blog</x-banner>

    @foreach ($posts as $post)
        <article>
            <h2>{{ $post['title'] }}</h2>
            <div class="flex items-center gap-x-2">
                <a href="/">lalal</a>
                <p>|</p>
                <p>1 januari 2021</p>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi dicta repellat ex.</p>
            <a href="/">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>
