{{-- @dd($post); --}}
@extends('layouts.main')
@section('container')
    <article>
        <h1>Halaman Blog Posts</h1>
        <h2>{{ $post->title }}</h2>
        <p>By : <q>{!! $post->author !!}</q> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/posts">Back To Posts</a>
@endsection