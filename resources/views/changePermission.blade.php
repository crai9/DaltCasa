@extends('layouts.page')

@section('main')

    {{--{{ empty(old('admin')) ? $user->hasRole('admin') : old('admin') }}--}}

<div class="container">
    <h1 class="post-title">{{ $user->name . "'s permissions" }}</h1>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="/admin">&laquo; Admin home</a>
            <div class="panel panel-default panel-spacing">
                <div class="panel-body">
                    Member: {{ $user->member_status ? "Yes" : "No" }}
                    <br>
                    User ID: {{ $user->id }}
                    <br>
                    Roles:
                    @foreach($user->cachedRoles() as $role)
                        {{ $role->display_name }},
                    @endforeach
                        <form class="form-horizontal" role="form" method="POST" action="/admin/users/{{ $user->id }}/update">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $user->id }}" required>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="form-check {{ $errors->has('admin') ? ' has-error' : '' }}">
                                        <label class="form-check-label">
                                            <input {{ $user->hasRole('admin') ? "checked" : "" }} name="admin" value="1" type="checkbox" class="form-check-input">
                                            @if ($errors->has('admin'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('admin') }}</strong>
                                                </span>
                                            @endif
                                            Site Admin
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="form-check {{ $errors->has('writer') ? ' has-error' : '' }}">
                                        <label class="form-check-label">
                                            <input {{ $user->hasRole('writer') ? "checked" : "" }} name="writer" value="1" type="checkbox" class="form-check-input">
                                            @if ($errors->has('writer'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('writer') }}</strong>
                                                </span>
                                            @endif
                                            Site Writer
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