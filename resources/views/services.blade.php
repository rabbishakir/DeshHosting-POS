@extends('layouts.app')
@section('bodyContent')

<!-- Begin page content -->
<main role="main" class="container">
  <div class="content">
    <h1 class="mt-5">{{$title}}</h1>
  <ul class="list-group">
    @if (count($servicesList)>0)
        @foreach($servicesList as $service)
        <li class="list-group-item">{{$service['name']}} {{$service['price']}}</li>
        @endforeach
    @else
    <!-- Else function -->
    @endif
  </ul>

  </div>
</main>

        
@endsection