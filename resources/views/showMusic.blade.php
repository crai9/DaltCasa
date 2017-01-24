@extends('layouts.page')

@section('main')

<div class="container">

    <article>

        <h1 class="post-title">{{ $music->title }}</h1>
        <br>
        <p style="font-weight: bold"> {{ $music->embed}} </p>

        <p style="white-space: pre-line"> {{ $music->body }} </p>

    </article>

</div>

@endsection