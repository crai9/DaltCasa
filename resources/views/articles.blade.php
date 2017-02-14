@extends('layouts.page')

@section('main')

<div class="container">
    <div class="middle">
        <h1 class="post-title">Articles</h1>
        <br>

        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">
                <hr>
                @if(count($articles) == 0)
                    <li class="list-group-item">
                        <span class="text-danger">There are no articles!</span>
                    </li>
                @endif
                @foreach ($articles as $article)

                    <div class="row">
                        <div class="col-sm-3">
                            <a href="/article/{{ $article->unique_slug }}" class="">
                                <img src="{{ $article->image }}" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <h3 class="title">
                                <a href="/article/{{ $article->unique_slug }}">{{ $article->title }}</a>
                            </h3>
                            <p>{{ $article->introduction }}</p>
                            <p class="text-muted">
                                <span class="by">by </span>
                                <a class="authors" href="/articles/by/{{ $article->writer->id }}">{{ $article->writer->name }}</a>
                            </p>
                        </div>
                    </div>
                    <hr>

                @endforeach

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    </div>
</div>

@endsection