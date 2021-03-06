@extends('layouts/app')

@section('content')
<div class="row">
  <div class="col-sm-8">
    <img src="/storage/{{$post->image}}" alt="post-image" class="w-100">
  </div>
  <div class="col-sm-4">
    <h3>{{ $post->user->username}}</h3>
    <p>{{$post->caption}}</p>
  </div>
</div>
@endsection
