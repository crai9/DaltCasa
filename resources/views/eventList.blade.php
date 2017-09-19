@extends('layouts.page')

@section('main')

<div class="container">

    <div class="main">

        <h1 class="post-title">Event List</h1>
        <a href="/admin">&laquo; Admin home</a>
        <ul class="list-group">
            @if(count($events) == 0)
                <li class="list-group-item">
                    <span class="text-danger">There are no event items!</span>
                </li>
            @endif
            @foreach ($events as $event)
                <li class="list-group-item">
                    @if($event->published == 0)
                        <span class="text-danger">{{ $event->title }}</span>
                    @else
                        <a href="/event/{{ $event->unique_slug }}">{{ $event->title }}</a>
                    @endif
                    <span class="float-r">
                        <a href="/admin/event/{{ $event->id }}/edit" type="submit" class="btn btn-primary btn-sm" role="button">Edit</a>

                        <form action="/admin/event/{{ $event->id }}/delete" method="POST" style="float: right; margin-left: 5px;">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $event->id }}">
                            <button type="submit" class="btn btn-primary btn-sm btn-danger" role="button">Delete</button>
                        </form>

                    </span>
                    <br>
                    <br>

                    @if($event->published == 0)
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