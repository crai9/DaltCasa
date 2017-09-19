@extends('layouts.page')

@section('main')

    <div class="container">
        <div class="middle">
            <h1 class="post-title">Music</h1>
            <br>

            <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <hr>
                    @if(count($musics) == 0)
                        <li class="list-group-item">
                            <span class="text-danger">There's no music right now</span>
                        </li>
                    @endif
                    @foreach ($musics as $music)

                        <div class="row">
                            <div class="col-sm-5">
                                <iframe width="100%" height="250" src="{{ $music->iframe_src }}" frameborder="0"></iframe>
                            </div>
                            <div class="col-sm-7">
                                <h3 class="title">
                                    <a href="/music/{{ $music->unique_slug }}">{{ $music->title }}</a>
                                </h3>
                                <p>{{ $music->introduction }}</p>
                                <p class="text-muted">
                                    <span class="by">posted by </span>
                                    <a class="authors" href="/articles/by/{{ $music->writer->id }}">{{ $music->writer->name }}</a>
                                    <span class="by"> on </span>
                                    <span class="authors">{{ Carbon\Carbon::parse($music->created_at)->format('l, jS F Y') }}</span>
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