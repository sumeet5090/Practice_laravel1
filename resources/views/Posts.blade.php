<x-layout>
    <x-slot name="content">

    <h1>Posts</h1>
        @foreach($posts as $post)
            <article>
                <h3><a href="posts/{{$post->slug}}">{{ $post->title }}</a></h3>
                <span>By <a href="">{{$post->user->name}}</a> In <a href="categories/{{$post->category->slug}}">{{$post->category->name}}</a></span>
                <div class="content">
                    <p>{{$post->excerpt}}</p>
                </div>
            </article>
        @endforeach
    </x-slot>
</x-layout>