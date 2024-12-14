@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>

  <div class="col-lg-8">
      <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label"><b>Title</b></label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
          @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label"><b>Slug</b></label>
          <input type="text" class="form-control" @error('slug') is-invalid @enderror id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
          @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label"><b>Category</b></label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
              @if (old('category_id', $post->category_id) == $category->id)
                  <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label"><b>Masukkan Image</b></label>
          <input type="hidden" name="oldImage" value="{{ $post->image }}">
          @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 d-block">
          @else
              <img class="img-preview img-fluid mb-3 col-sm-5">
          @endif
          <input class="form-control" @error('image') is-invalid @enderror type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="body" class="form-label"><b>Body</b></label>
          @error('body')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
          <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
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

        function previewImage(){
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(oFRevent){
            imgPreview.src = oFRevent.target.result;
          }
        }
  </script>
@endsection