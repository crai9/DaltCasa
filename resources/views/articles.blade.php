@extends('layouts.page')

@section('main')

<div class="container">
    <div class="main">
        <h1 class="post-title">Articles</h1>
        <br>
        <div class="list-group">

            @if(count($articles) == 0)
                <li class="list-group-item">
                    <span class="text-danger">There are no articles!</span>
                </li>
            @endif
            @foreach ($articles as $article)
                <li class="list-group-item">
                    <a href="/article/{{ $article->unique_slug }}">{{ $article->title }}</a>
                </li>
            @endforeach

        </div>
    </div>
</div>

@endsection