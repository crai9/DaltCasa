@extends('layouts.page')

@section('main')

<div class="container">

        <h1 class="post-title">New Article</h1>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default panel-spacing">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/article') }}">
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

                            <div class="form-group{{ $errors->has('introduction') ? ' has-error' : '' }}">
                                <label for="introduction" class="col-md-4 control-label">Introduction</label>

                                <div class="col-md-6">
                                    <textarea id="introduction" rows="2" type="text" class="form-control" name="introduction" required>{{ old('introduction') }}</textarea>

                                    @if ($errors->has('introduction'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('introduction') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="body" class="col-md-4 control-label">Body</label>

                                <div class="col-md-6">
                                    <textarea id="body" rows="5" class="form-control" name="body" required>{{ old('body') }}</textarea>

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