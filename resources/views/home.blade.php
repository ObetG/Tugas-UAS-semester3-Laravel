@extends('layouts.main')

@section('container')
<div class="p-5 text-center bg-image" style="
    background-image: url('img/AUDI2.png');
    height: 500px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    overflow: hidden;">
    <div class="d-flex justify-content-center align-items-center h-100" style="position: relative; z-index: 2;">
        <div class="text-white">
            <h1 class="mb-3">Selamat Datang Di Project UAS Kami</h1>
            <a class="btn btn-outline-light btn-lg" href="/categories" role="button">Cari Berdasarkan Kategori</a>
        </div>
    </div>
    <div
        style="content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.3); z-index: 1;">
    </div>
</div>
<div class="my-3 d-flex justify-content-center">
    <div class="w-50 text-center">
        <h2>About Us</h2>
        <p class="">Terima kasih telah mengunjungi website kami, Semoga website ini tidak mengecewakan Anda, dan
            kami
            harap Anda
            menyukai website kami.
            Jangan lupa kunjungi website ini lagi, saya tunggu terus!</p>
    </div>
</div>

<div class="py-3" style="background: #E8E8E8">
    <h2 class="text-center">Blog Terbaru</h2>
    <div class="container my-3">
        @foreach ($blog as $data)
        <div class="d-flex align-items-start gap-2 p-2">
            <a href="/posts/{{$data->slug}}">
                <img src="{{asset('img/post/'. $data->image)}}" height="100" alt="">
            </a>
            <div>
                <a style="text-decoration: none; color: black" href="/posts/{{$data->slug}}">
                    <h2 class="p-0 m-0">{{$data->title}}</h2>
                </a>
                <p class="p-0 m-0">{{$data->excerpt}}</p>
                <p class="p-0 m-0" style="font-size: 14px">Diposting Oleh {{$data->username}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection