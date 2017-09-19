@extends('layouts.page')

@section('main')

    <div class="container">
        <div class="middle">
            <h1 class="post-title">Upcoming Events</h1>
            <br>

            <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <hr>
                    @if(count($events) == 0)
                        <li class="list-group-item">
                            <span class="text-danger">There's no music right now</span>
                        </li>
                    @endif
                    @foreach ($events as $event)

                        <div class="row">
                            <div class="col-sm-3">
                                <a href="/events/{{ $event->unique_slug }}" class="">
                                    <img src="{{ $event->image }}" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-sm-9">
                                <h3 class="title">
                                    <a href="/events/{{ $event->unique_slug }}">{{ $event->title }}</a>
                                </h3>
                                {{--<p>{{ $event->introduction }}</p>--}}
                                <p class="text-muted">
                                    <span class="glyphicon glyphicon-time faded-icon" aria-hidden="true"></span>
                                    <span class="by"> {{ $event->date }} - {{ $event->time }} </span>
                                    <br>
                                    <span class="glyphicon glyphicon-map-marker faded-icon" aria-hidden="true"></span>
                                    <span class="by"> {{ $event->address }} </span>
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