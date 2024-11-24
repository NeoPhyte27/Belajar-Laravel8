@extends('layouts.main')

@section('container')
    <h1>ini adalah halaman about</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/picture/{{ $img }}" alt="{{ $nama }}" width="200px" class="img-thumbnail rounded-circle">
@endsection