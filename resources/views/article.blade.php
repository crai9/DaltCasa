@extends('layouts.page')

@section('title', $article->title . ' - DaltCasa' )
@section('description', $article->introduction)
@section('main')

<div class="container">

    <article>

        <h1 class="post-title">{{ $article->title }}</h1>
        <br>
        <span class="article-details">
            <span class="glyphicon glyphicon-time faded-icon" aria-hidden="true"></span>
            {{ Carbon\Carbon::parse($article->created_at)->format('l jS F Y') }} | By {{ $author->name }}
        </span>
        <hr width="95%" size="6">
        <p class="introduction">{{ $article->introduction}}</p>

        {!! $article->body !!}

    </article>

</div>

@endsection