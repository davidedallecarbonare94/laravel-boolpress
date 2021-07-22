@extends('layouts.admin')


@section('content')

<h1>Create a new Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form action="{{route('admin.posts.update', $post->id)}}" method="post">
    @csrf 
    @method('PUT')

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="add a title" aria-describedby="helpId" value="{{$post->title}}">
      <small id="helpId" class="text-muted">Type a title for the current post, max: 255 char</small>
    </div>
    <div class="form-group">
      <label for="image">Cover image</label>
      <input type="text" name="image" id="image" class="form-control" placeholder="add a title" aria-describedby="helpId" value="{{$post->image}}">
      <small id="helpId" class="text-muted">Type a image url for the current post, max: 255 char</small>
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" name="body" id="body" rows="4">{{$post->body}}</textarea>
    </div>
    <button type="submit">Update</button>
    @endsection


</form>
