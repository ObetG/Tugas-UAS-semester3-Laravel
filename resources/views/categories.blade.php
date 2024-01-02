@extends('layouts.main')

@section('container')
<div class="py-3"
    style="min-height: 100vh; background: url('img/AUDI.jpg'); background-repeat: repeat-y; background-size: auto">
    <h3 class=" my-3 text-white text-center">Blog Kategori</h3>

    <div class="container mt-5">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a style="text-decoration: none; color:white;" href="posts?category={{ $category->slug }}">
                    <div class="text-center border border-3 rounded p-3" style="position: relative; overflow: hidden;">
                        <h1 style="position: relative; z-index: 2;">{{ $category->name }}</h1>
                        <div
                            style="content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 1;">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection