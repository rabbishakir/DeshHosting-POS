@extends('layouts.app')

@section('bodyContent')

<main role="main" class="container">
    <div class="content">
    <h1 class="mt-5">Posts</h1>
    
    @if (count($posts)>0)
    <div class="row">
        @foreach ($posts as $post)

              <div class="card col-3">
                <img class="card-img-top" src="{{ URL::to('/assets/img/card_image.jpg') }}" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">{{$post->name}}</h4>
                    <small>Created at {{$post->created_at}}</small> <br>
                    <small>by {{$post->user->name}}</small>
                    <p class="card-text">{!!$post->body!!}</p>
                    <a href="posts/{{$post->id}}" class="btn btn-primary">Read More</a>
                </div>
              </div>   
        @endforeach
    </div>
    <div class="paginator mt-5">
        {{ $posts->links()}}
    </div>
    
    @else
        <p>No Post Found</p>
    @endif
    </div>
  </main>

@endsection