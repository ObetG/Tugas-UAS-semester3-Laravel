@extends('layouts.main')

@section('container')
<div style="min-height: 100vh; background: url('img/AUDI.jpg'); background-repeat: repeat-y; background-size: auto">
  <h3 class="py-3 text-white text-center">{{ $title }}</h3>

  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/posts">
        @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  <div class="container">
    <div class="row">
      @foreach ($posts as $data)
      <div class="col-md-3 mb-2">
        <div class="border border-3 rounded p-2 text-white" style="position: relative; overflow: hidden;">
          <a href="/posts/{{$data->slug}}" style="position: relative; z-index: 2;">
            <img src="{{asset('img/post/'.$data->image)}}" class="img-fluid" alt="">
          </a>
          <h4 class="p-0 m-0 pt-2" style="position: relative; z-index: 2;">{{$data->title}}</h4>
          <p class="p-0 m-0" style="position: relative; z-index: 2;">{{$data->excerpt}}</p>
          <p class="p-0 m-0" style="position: relative; z-index: 2;">Oleh <a href="/posts?author={{ $data->username }}"
              class="text-decoration-none">{{$data->username}}</a>
          </p>
          <div
            style="content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 1;">
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <div class="d-flex justify-content-center">
    {{ $posts->links() }}
  </div>
</div>

@endsection