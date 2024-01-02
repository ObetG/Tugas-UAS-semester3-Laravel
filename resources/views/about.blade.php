@extends('layouts.main')

@section('container')
<center>
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" width="200" alt="{{ $name }}" class="img-thumbnail rounded-circle"></center>
@endsection