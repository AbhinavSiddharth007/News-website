@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Latest News</h2>

    <div class="row">
        @foreach($articles as $article)
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ $article['urlToImage'] }}" class="card-img-top" alt="news image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text">{{ $article['description'] }}</p>
                        <a href="{{ $article['url'] }}" target="_blank" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
