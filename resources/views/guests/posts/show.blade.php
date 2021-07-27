@extends('layouts.app')

@section('content')

<h1>single post</h1>

<div class="container">
    <img class="img-fluid" src="{{$post->image}}" alt="{{$post->title}}">
    <h4 class="display-1">{{$post->title}}</h4>
    <p class="lead">{{$post->body}}</p>
    <a href="{{route('posts.index')}}">Go Back</a>
</div>


@endsection