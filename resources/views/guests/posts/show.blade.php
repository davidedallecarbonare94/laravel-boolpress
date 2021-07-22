@extends('layouts.app')

@section('content')

<h1>single post</h1>

<div class="container">
    <img class="img-fluid" src="{{$posts->image}}" alt="{{$posts->title}}">
    <h4 class="display-1">{{$posts->title}}</h4>
    <p class="lead">{{$posts->body}}</p>

</div>


@endsection