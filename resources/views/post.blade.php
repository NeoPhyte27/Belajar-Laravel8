{{-- @dd($post); --}}
@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <article>
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"><q>{!! $post->author->username !!}</q></a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}"" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @else
                      <img src="/img/card/keren.png" width="1000px "class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </article>
            <a href="/posts" class="d-block mt-3">Back To Posts</a>
        </div>
    </div>
</div>
@endsection