@extends('layouts.app')

@section('bodyContent')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">{{$post->name}}</h1>
      <p class="lead">Written on {{$post->created_at}}</p>
    </div>
</div>
<main role="main" class="container">
    <div class="content">
      <p>{!!$post->body!!}</p> 
    </div>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary float-left">Edit</a>  
    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class'=>'btn btn-info float-left'])}}
    {!! Form::close() !!}
</main>
@endsection    