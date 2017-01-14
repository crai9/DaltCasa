@extends('layouts.page')

@section('main')

<div class="container">

    <div class="main">

        <h1 class="post-title">Article List</h1>
        <ul class="list-group">
            @if(count($articles) == 0)
                <li class="list-group-item">
                    <span class="text-danger">There are no articles!</span>
                </li>
            @endif
            @foreach ($articles as $article)
                <li class="list-group-item">
                    @if($article->published == 0)
                        <span class="text-danger">{{ $article->title }}</span>
                    @else
                        <a href="/articles/{{ $article->unique_slug }}">{{ $article->title }}</a>
                    @endif
                    <span class="float-r">
                        <a href="/admin/article/{{ $article->id }}/edit" type="submit" class="btn btn-primary btn-sm" role="button">Edit</a>

                        <form action="/admin/article/{{ $article->id }}/delete" method="POST" style="float: right; margin-left: 5px;">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $article->id }}">
                            <button type="submit" class="btn btn-primary btn-sm btn-danger" role="button">Delete</button>
                        </form>

                    </span>
                    <br>
                    <br>

                    @if($article->published == 0)
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not published
                    @else
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Published
                    @endif
                </li>
            @endforeach

        </ul>

    </div>
</div>

@endsection