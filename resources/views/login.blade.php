@extends('layouts.layout')

@section('bodyContent')

    @for($i=0; $i<count($userData); $i++)
        <p> this is i value of {{ $userData[$i]['product'] }} </p>
    @endfor

    @foreach($userData as $user)
        <p>his is i value of {{ $user['product'] }}</p>
    @endforeach

@endsection
