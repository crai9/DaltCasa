@extends('layouts.page')

@section('main')

<div class="container">

        <h1 class="post-title">Your Account Settings</h1>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="/">&laquo; Home</a>

                @if($success == true)
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="text-success"><strong>Settings updated!</strong></span>
                    </li>
                </ul>
                @endif

                <div class="panel panel-default panel-spacing">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/settings">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ empty(old('name')) ? $user->name : old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" value="{{ empty(old('email')) ? $user->email : old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email-confirm') ? ' has-error' : '' }}">
                                <label for="email-confirm" class="col-md-4 control-label">Confirm Email</label>
                                <div class="col-md-6">
                                    <input id="email-confirm" type="text" class="form-control" name="email-confirm" value="{{ empty(old('email-confirm')) ? $user->email : old('email-confirm') }}" required>

                                    @if ($errors->has('email-confirm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email-confirm') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                <label for="location" class="col-md-4 control-label">Location</label>
                                <div class="col-md-6">
                                    <input id="location" type="text" class="form-control "placeholder="Not required" name="location" value="{{ empty(old('location')) ? $user->location : old('location') }}" >

                                    @if ($errors->has('location'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone-number') ? ' has-error' : '' }}">
                                <label for="phone-number" class="col-md-4 control-label">Phone Number</label>
                                <div class="col-md-6">
                                    <input id="phone-number" type="text" class="form-control" placeholder="Not required" name="phone-number" value="{{ empty(old('phone-number')) ? $user->phone_number : old('phone-number') }}" >

                                    @if ($errors->has('phone-number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone-number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mailing-list') ? ' has-error' : '' }}">
                                <label for="mailing-list" class="col-md-4 control-label">Receive email updates?</label>
                                <div class="col-md-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="mailing-list" value="yes" {{ $user->mailing_list == true ? 'checked' : '' }}>
                                            Yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="mailing-list" value="no" {{ $user->mailing_list == false ? 'checked' : '' }}>
                                            No
                                        </label>
                                    </div>

                                    @if ($errors->has('mailing-list'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mailing-list') }}</strong>
                                    </span>
                                    @endif
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