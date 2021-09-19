@extends('layouts.app')

@section('bodyContent')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    
                    @endif

                    <p>{{ __('You are logged in!') }}</p>
                    <a href="/posts/create">Create Posts </a>
                    <h3>Your Blog Posts are here second </h3>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
