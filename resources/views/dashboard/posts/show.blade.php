{{-- @dd($post); --}}
@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle"></i> Delete</button>
                  </form>

                  @if ($post->image)
                  <div style="max-height: 350px; overflow:hidden;">
                      <img src="{{ asset('storage/' . $post->image) }}"" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                  </div>
                  @else
                        <img src="/img/card/keren.png" width="1000px "class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                  @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </article>
        </div>
    </div>
</div>
@endsection