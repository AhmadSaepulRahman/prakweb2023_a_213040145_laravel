@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By. Ahmad Saeful Rahman In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></P>

    {!! $post->body !!}

<a href="/blog">BACK</a>

@endsection