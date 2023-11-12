@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a></P>

    {!! $post->body !!}

<a href="/blog"class="d-block mt-5">BACK</a>

@endsection