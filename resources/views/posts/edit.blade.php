@extends('layouts.app')

@section('bodyContent')

<main role="main" class="container">
    <div class="content">
    <h1 class="mt-5">Edit Post</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Post Title', ['class' => 'form-label'])}}
        {{Form::text('name', $post->name,['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Post Content', ['class' => 'form-label'])}}
        {{Form::textarea('body', $post->body,['class'=>'ckeditor form-control', 'placeholder'=>'Content'])}}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    {{Form::submit('Submit', ['class'=>'btn btn-info'])}}
    {!! Form::close() !!}

    </div>
  </main>
@endsection