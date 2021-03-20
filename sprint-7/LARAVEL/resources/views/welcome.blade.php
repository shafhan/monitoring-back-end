@extends('layouts.app')
@section('content')
    <div class="container">
        @auth
            <a href="{{ url('/home') }}" class="btn btn-secondary btn-lg btn-block">Home</a>
        @else
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-block">Login</a>
            @if(Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg btn-block">Register</a>
            @endif
        @endauth
    </div>
@endsection