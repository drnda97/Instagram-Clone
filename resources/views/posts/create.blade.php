@extends('layouts/app')

@section('content')
<form name="add-post-form" action="/post/store" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-8 offset-2">
      <h1>Add New Post</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-8 offset-2">
      <div class="form-group row">
          <label for="caption" class="col-md-4 col-form-label">Caption</label>

            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

            @error('caption')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-8 offset-2">
      <div class="form-group row">
          <label for="caption" class="col-md-4 col-form-label">Image</label>

            <input id="image" type="file" class="form-control-file" name="image">

            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-8 offset-2">
      <button type="submit" class="btn btn-primary">Add new post</button>
    </div>
  </div>
</form>
@endsection
