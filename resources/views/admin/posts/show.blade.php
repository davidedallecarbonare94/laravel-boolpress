@extends('layouts.admin')


@section('content')

<h1>Single Post</h1>

<h1>{{$post->title}}</h1>
<img src="{{$post->image}}" alt="{{$post->title}}">
<p>{{$post->body}}</p>

<a href="{{route('admin.posts.edit', $post->id)}}">Edit</a>
<a href="{{route('admin.posts.index')}}">Torna indietro</a>




@endsection