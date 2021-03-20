@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($articles as $article)
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-2">{{ $article->title }}</h1>
                    <p class="lead">{{ $article->content }}</p>
                    <a href="/edit/{{ $article->id }}" class="btn btn-success btn-sm">Edit</a>
                    <form action="/hapus/{{ $article->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                    <a href="/showCategory/{{ $article->category }}" class="btn btn-primary btn-sm">#{{ $article->category }}</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection