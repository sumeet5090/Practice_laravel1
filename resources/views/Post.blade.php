<x-layout>
    <x-slot name="content">
        <a href="/"><i class="fa-solid fa-left-long"></i> Back to Posts</a>
        <article>
            <h1>{{ $post->title }}</h1>
            <span>By <a href="">{{$post->user->name}}</a> In <a href="">{{$post->category->name}}</a></span>
            <div class="content">{{ $post->content }}</div>
        </article>

    </x-slot>
</x-layout>