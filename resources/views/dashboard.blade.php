@extends('layouts.app')

@section('bodyContent')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><a class="btn btn-success float-left" href="/posts/create">Create Post</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    
                    @endif

                   <!-- <p>{{ __('You are logged in!') }}</p> -->
                    
                    

                    @if (count($posts)>0)
                    <table class="table table-striped">
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->name}}</td>
                                <td>
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary float-right">Edit</a>
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete', ['class'=>'btn btn-danger float-right'])}}
                                    {!! Form::close() !!}
                                </td>
                              </tr>
                            @endforeach
                          
                        </tbody>
                      </table>
                    @else
                    <p>You dont have posts</p>
                    @endif
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
