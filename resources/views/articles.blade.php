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
                @for ($i=$articles->count() - 1; $i>=0; $i--)

                    <div class="row">
                        <div class="col-sm-3">
                            <a href="/article/{{ $articles->get($i)->unique_slug }}" class="">
                                <img src="{{ $articles->get($i)->image }}" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <h3 class="title">
                                <a href="/article/{{ $articles->get($i)->unique_slug }}">{{ $articles->get($i)->title }}</a>
                            </h3>
                            <p>{{ $articles->get($i)->introduction }}</p>
                            <p class="text-muted">
                                <span class="by">by </span>
                                <a class="authors" href="/articles/by/{{ $articles->get($i)->writer->id }}">{{ $articles->get($i)->writer->name }}</a>
                            </p>
                        </div>
                    </div>
                    <hr>

                @endfor

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    </div>
</div>

@endsection