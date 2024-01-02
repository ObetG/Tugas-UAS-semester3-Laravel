@extends('layouts.main')

@section('container')

<div class="container">
  <div class="row justify-content-center my-3">
    <div class="col-md-8">
      <h1 class="mb-3">{{ $post->title }}</h1>
      <p>Diposting oleh <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{
          $post->author->name
          }}</a> di <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{
          $post->category->name }} Kategori</a></p>

      <div>
        <img src="{{ asset('img/post/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
      </div>

      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>


      <a href="/posts" class="d-block mt-3">Kembali ke Postingan</a>
    </div>
  </div>
</div>


@endsection