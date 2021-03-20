@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-2">{{ $articles->title }}</h1>
                <p class="lead">{{ $articles->content }}</p>
                <a href="/edit/{{ $articles->id }}" class="btn btn-success btn-sm">Edit</a>
                <form action="/hapus/{{ $articles->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
                <a href="/showCategory/{{ $articles->category }}" class="btn btn-primary btn-sm">#{{ $articles->category }}</a>
            </div>
        </div>
    </div>
@endsection