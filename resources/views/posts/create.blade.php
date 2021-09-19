@extends('layouts.app')

@section('bodyContent')

<main role="main" class="container">
    <div class="content">
    <h1 class="mt-5">Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Post Title', ['class' => 'form-label'])}}
        {{Form::text('name','',['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Post Content', ['class' => 'form-label'])}}
        {{Form::textarea('body','',['class'=>'ckeditor form-control', 'placeholder'=>'Content'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-info'])}}
    {!! Form::close() !!}

    </div>
  </main>
@endsection