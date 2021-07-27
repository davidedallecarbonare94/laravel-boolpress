@extends('layouts.admin')


@section('content')

<h1>Create a new Post</h1>

@include('partials.errors')

<form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
    @csrf 
    
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="add a title" aria-describedby="helpId" value="{{old('title')}}">
      <small id="helpId" class="text-muted">Type a title for the current post, max: 255 char</small>
    </div>

    <!-- <div class="form-group">
      <label for="image">Cover image</label>
      <input type="text" name="image" id="image" class="form-control" placeholder="add a title" aria-describedby="helpId" value="{{old('image')}}">
      <small id="helpId" class="text-muted">Type a image url for the current post, max: 255 char</small>
    </div> -->
    
    <div class="form-group">
      <label for="image">Cover image</label>
      <input type="file" name="image" id="image">
    </div>
    @error('image')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror  



    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" name="body" id="body" rows="4">{{old('body')}}</textarea>
    </div>
    <button type="submit">Submit</button>
    
  </form>
  @endsection
