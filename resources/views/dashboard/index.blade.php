@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Hiii {{ auth()->user()->name }}</h1>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="card">
      <div class="card-body">
        <h2>{{$total_post}}</h2>
        <h5>Total Post</h5>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
      <div class="card-body">
        <h2>{{$total_user}}</h2>
        <h5>Total User</h5>
      </div>
    </div>
  </div>
</div>
@endsection