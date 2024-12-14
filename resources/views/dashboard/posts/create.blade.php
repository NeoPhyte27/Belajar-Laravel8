@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Posts</h1>
  </div>

  <div class="col-lg-8">
      <form method="post" action="/dashboard/posts" class="mb-5">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label"><b>Title</b></label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
          @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label"><b>Slug</b></label>
          <input type="text" class="form-control" id="slug" name="slug">
        </div>
        <div class="mb-3">
          <label for="category" class="form-label"><b>Category</b></label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
              @if (old('category_id') == $category->id)
                  <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="body" class="form-label"><b>Body</b></label>
          @error('body')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body') }}">
          <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>
  </div>

  <script>
    const title = document.getElementById('title');
    const slug = document.getElementById('slug');

    title.addEventListener('change', function(){
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
//       fetch('/dashboard/posts/checkSlug?title=' + title.value, {
//     headers: {
//         'Accept': 'application/json'
//     }
// })
// .then(response => {
//     if (!response.ok) {
//         throw new Error('Network response was not ok ' + response.statusText);
//     }
//     return response.json();
// })
// .then(data => slug.value = data.slug)
// .catch(error => console.error('There was a problem with the fetch operation:', error));
    });

//     title.addEventListener('change', function() {
//     fetch('/dashboard/posts/checkSlug?title=' + title.value)
//     .then(response => response.json())
//     .then(data => slug.value = data.slug)
// });


    // const title = document.querySelector("#title");
    //     const slug = document.querySelector("#slug");

        // title.addEventListener("keyup", function() {
        //     let preslug = title.value;
        //     preslug = preslug.replace(/ /g,"-");
        //     slug.value = preslug.toLowerCase();
        // });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        });
  </script>
@endsection