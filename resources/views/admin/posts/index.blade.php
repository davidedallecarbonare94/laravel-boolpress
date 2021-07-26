@extends('layouts.admin')


@section('content')

<div class="d-flex">
    <h1>All Posts</h1>
    <div><a class="btn btn-primary" href="{{route('admin.posts.create')}}"></a>Add a post</div>
</div>




<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>TITLE</th>
            <th>ACTIONS</th>
        </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                
            <tr>
                <td scope="row">{{$post->id}}</td>
                <td><img src="{{asset('storage/' . $post->image)}}" alt="{{$post->title}}"></td>
                <td>{{$post->title}}</td>
                <div class="d-flex flex-column"></div>    
            </tr>


            @endforeach
            
        </tbody>
</table>


@endsection