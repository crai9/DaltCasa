@extends('layouts.page')

@section('main')

<div class="container">

    <div class="main">

        <h1 class="post-title">Music List</h1>
        <a href="/admin">&laquo; Admin home</a>
        <ul class="list-group">
            @if(count($musics) == 0)
                <li class="list-group-item">
                    <span class="text-danger">There are no music items!</span>
                </li>
            @endif
            @foreach ($musics as $music)
                <li class="list-group-item">
                    @if($music->published == 0)
                        <span class="text-danger">{{ $music->title }}</span>
                    @else
                        <a href="/music/{{ $music->unique_slug }}">{{ $music->title }}</a>
                    @endif
                    <span class="float-r">
                        <a href="/admin/music/{{ $music->id }}/edit" type="submit" class="btn btn-primary btn-sm" role="button">Edit</a>

                        <form action="/admin/music/{{ $music->id }}/delete" method="POST" style="float: right; margin-left: 5px;">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $music->id }}">
                            <button type="submit" class="btn btn-primary btn-sm btn-danger" role="button">Delete</button>
                        </form>

                    </span>
                    <br>
                    <br>

                    @if($music->published == 0)
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