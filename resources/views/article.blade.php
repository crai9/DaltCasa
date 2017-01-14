@extends('layouts.page')

@section('main')

<div class="container">

    <article>

        <h1 class="post-title">{{ $article->title }}</h1>
        <br>
        <p style="font-weight: bold"> {{ $article->introduction}} </p>

        <p style="white-space: pre-line""> {{ $article->body }} </p>

    </article>

</div>

@endsection