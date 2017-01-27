@extends('layouts.page')

@section('main')

<div class="container">

    <article>

        <h1 class="post-title">{{ $article->title }}</h1>
        <br>
        <span class="glyphicon glyphicon-time faded-icon" aria-hidden="true"></span> {{ Carbon\Carbon::parse($article->created_at)->format('l jS F Y') }} | By {{ $author->name }}
        <hr width="95%" size="6">
        <p style="font-weight: bold"> {{ $article->introduction}} </p>

        <p style="white-space: pre-line"> {!! $article->body !!} </p>

    </article>

</div>

@endsection