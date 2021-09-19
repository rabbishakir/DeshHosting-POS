@extends('Layouts.layout')

@section('bodyContent')

            @foreach($products as $product)
            <p>This is {{ $product->name }} and price is {{ $product->price }} </p>

            @endforeach
@endsection
