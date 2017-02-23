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

        <h1 class="post-title">New Music</h1>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="/admin">&laquo; Admin home</a>
                <div class="panel panel-default panel-spacing">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/music') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                                <label for="link" class="col-md-4 control-label">Link</label>

                                <div class="col-md-6">
                                    <input placeholder="Not required" id="link" type="text" class="form-control" name="link" value="{{ old('link') }}">

                                    @if ($errors->has('link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('embed-type') ? ' has-error' : '' }}">
                                <label for="embed-type" class="col-md-4 control-label">Embed Type</label>

                                <div class="col-md-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="embed-type" value="mixcloud" {{ old('embed-type') == 'mixcloud' ? 'checked' : '' }}>
                                            MixCloud → "https://www.mixcloud.com/DALTCASA/dalt-casa-episode-i/"
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="embed-type" value="soundcloud" {{ old('embed-type') == 'soundcloud' ? 'checked' : '' }}>
                                            SoundCloud → "https://soundcloud.com/daltcasa/track-name-here"
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="embed-type" value="youtube" {{ old('embed-type') == 'youtube' ? 'checked' : '' }}>
                                            YouTube → "https://www.youtube.com/watch?v=12345ABCDEF"
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <span class="text-danger">If you don't use the above URL formats something will probably break</span>
                                        </label>
                                    </div>

                                    @if ($errors->has('embed-type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('embed-type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('embed') ? ' has-error' : '' }}">
                                <label for="embed" class="col-md-4 control-label">Embed</label>

                                <div class="col-md-6">
                                    <input id="embed" type="text" class="form-control" name="embed" value="{{ old('embed') }}" placeholder="URL format should be same as above" required>

                                    @if ($errors->has('embed'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('embed') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="body" class="col-md-4 control-label">Body</label>

                                <div class="col-md-6">
                                    <textarea placeholder="Not required" id="body" rows="5" class="form-control" name="body">{{ old('body') }}</textarea>

                                    @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('publish') ? ' has-error' : '' }}">
                                <label for="publish" class="col-md-4 control-label">Publish?</label>

                                <div class="col-md-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="publish" id="optionsRadios1" value="yes">
                                            yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="publish" id="optionsRadios2" value="no" checked>
                                            no
                                        </label>
                                    </div>
                                </div>
                            </div>
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