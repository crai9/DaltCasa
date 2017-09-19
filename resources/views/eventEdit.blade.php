@extends('layouts.page')
@section('css', '<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">')
@section('js')
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("body") });
    </script>
@endsection()

@section('main')

<div class="container">

        <h1 class="post-title">Edit Event</h1>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="/admin">&laquo; Admin home</a>
                <div class="panel panel-default panel-spacing">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/admin/event/{{ $event->id }}/update">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $event->id }}" required>
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ empty(old('title')) ? $event->title : old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image" class="col-md-4 control-label">Image</label>

                                <div class="col-md-6">
                                    <input value="{{ empty(old('image')) ? $event->image : old('image') }}" id="link" rows="2" type="text" class="form-control" name="image">

                                    @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input value="{{ empty(old('address')) ? $event->address : old('address') }}" id="link" rows="2" type="text" class="form-control" name="address">

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('embed') ? ' has-error' : '' }}">
                                <label for="embed" class="col-md-4 control-label">Map Embed</label>

                                <div class="col-md-6">
                                    <input id="embed" rows="2" value="{{ empty(old('embed')) ? $event->map_iframe : old('embed') }}" type="text" class="form-control" name="embed" required>

                                    @if ($errors->has('embed'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('embed') }}</strong>
                                    </span>
                                    @endif
                                    <br>
                                    <label>
                                        <span class="text-info">Find location on Google Maps, click share, go to "Embed map" tab, copy highlighted text using medium size.</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                <label for="date" class="col-md-4 control-label">Date</label>

                                <div class="col-md-6">
                                    <input placeholder="Format: 2017-04-04" value="{{ empty(old('date')) ? $event->date : old('date') }}" id="date" rows="2" type="text" class="form-control" name="date">

                                    @if ($errors->has('date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                                <label for="time" class="col-md-4 control-label">Time</label>

                                <div class="col-md-6">
                                    <input placeholder="Format: 18:00:00" value="{{ empty(old('time')) ? $event->time : old('time') }}" id="time" rows="2" type="text" class="form-control" name="time">

                                    @if ($errors->has('time'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="body" class="col-md-4 control-label">Event Details</label>

                                <div class="col-md-6">
                                    <textarea id="body" rows="5" class="form-control" name="body">{{ empty(old('body')) ? $event->body : old('body') }}</textarea>

                                    @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            @if($event->published == 0)
                            <div class="form-group{{ $errors->has('publish') ? ' has-error' : '' }}">
                                <label for="publish" class="col-md-4 control-label">Publish?</label>

                                <div class="col-md-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="publish" id="optionsRadios1" value="yes" {{ $event->published == 1 ? 'checked' : '' }}>
                                            yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="publish" id="optionsRadios2" value="no" {{ $event->published == 1 ? '' : 'checked' }}>
                                            no
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection