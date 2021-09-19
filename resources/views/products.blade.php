@extends('layouts.layout')

@section('bodyContent')

@for($i=0; $i<count($products); $i++)
<p> this is i value of {{ $products[$i]['name'] }} </p>
@endfor

@foreach($products as $product)
<p>his is i value of {{ $product['name'] }}</p>
@endforeach

@endsection
