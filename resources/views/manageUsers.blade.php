@extends('layouts.page')

@section('main')

<div class="container">
    <h1 class="post-title">Manage users</h1>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="/admin">&laquo; Admin home</a>
            <div class="panel panel-default panel-spacing">
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Member?</th>
                                <th>Roles</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->member_status ? "Yes" : "No" }}</td>
                                    <td>
                                        @foreach($user->cachedRoles() as $role)
                                            {{ $role->display_name }},
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="/admin/users/{{ $user->id }}" type="submit" class="btn btn-primary btn-sm" role="button">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection