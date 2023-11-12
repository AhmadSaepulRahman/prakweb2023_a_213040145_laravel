@extends('layouts.main')

@section('container')
    <h1 class="mb-5"> {{ $title }} </h1>

    @foreach ($posts as $post)
    <article class="mb-5 border-battom pb-4">

        <h2><a href="/posts/{{ $post->slug }}"class="text-decoration-none">{{ $post->title }}</a></h2>

        <p>By. <a href="/authors/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></P>

        <p>{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug }}"class="text-decoration-none">Read more</a>
</article>
    @endforeach

 @endsection