@extends('layouts.app')

@section('content')



<div class="container">
    <h1>Posts</h1>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card">
              <a href="{{route('posts.show', $post->id)}}"><img height="150px" class="card-img-top" src="{{$post->image}}" alt="{{$post->title}}"></a>
              <div class="card-body">
                <h4 class="card-title">{{$post->title}}</h4>
                <p class="card-text">{{$post->body}}</p>
              </div>
            </div>   

        </div>
        @endforeach
        
    </div>
    {{ $posts->links() }}
</div>


@endsection