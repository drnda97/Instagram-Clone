@extends('layouts/app')

@section('content')
<div class="row pb-5">
  <div class="col-sm-4 profile-image">
    <img src="https://cdn.spacetelescope.org/archives/images/wallpaper2/heic2007a.jpg" alt="featured-image" class="w-50">
  </div>
    <div class="col-sm-8">
      <div class="profile-name d-flex justify-content-between align-items-baseline">
        <h3>{{ $user->username }}</h3>
        <a href="/post/create">Dodaj novu objavu</a>
      </div>
      <a href="/profile/{{$user->id}}/edit">Uredi profil</a>
      <div class="info d-flex">
        <span class="pr-5"><strong>{{ $user->posts->count() }}</strong> objava</span>
        <span class="pr-5"><strong>2002</strong> pratilaca</span>
        <span class="pr-5"><strong>1000</strong> prati</span>
      </div>
      @if($user->profile->description)
        <div class="description pt-3">{{ $user->profile->description }}</div>
      @else
        <div class="description pt-3">

        </div>
      @endif
    </div>
</div>
<div class="row">
@foreach($user->posts as $post)
  <div class="col-sm-4 pb-4">
    <a href="/post/{{ $post->id }}">
      <img src="/storage/{{$post->image}}" alt="post-image" class="w-100">
    </a>
  </div>
@endforeach
</div>
@endsection
