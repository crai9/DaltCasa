@extends('layouts.page')

@section('main')

    <div class="container">

        <h1 class="post-title">Contact</h1>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="/">&laquo; Home</a>
                <div class="panel panel-default panel-spacing">
                    <div class="panel-body">
                        @if(!Auth::user())
                            <li class="list-group-item">
                                <span class="text-danger">You need to be logged in to send a message</span>
                            </li>
                        @else

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/contact/submit') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                <label for="message" class="col-md-4 control-label">Message</label>

                                <div class="col-md-6">
                                    <textarea id="message" rows="2" type="text" class="form-control" name="message" required>{{ old('message') }}</textarea>

                                    @if ($errors->has('message'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection