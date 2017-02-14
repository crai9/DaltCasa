@extends('layouts.page')

@section('main')

<div class="container">

    <div class="main">

        <h1 class="post-title">Admin Home</h1>

        <div class="list-group">
            <a href="/admin/article/create" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New article</a>
            <a href="/admin/article" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Manage articles</a>
            <a href="/admin/music/create" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New music</a>
            <a href="/admin/music" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Manage music</a>
            <a href="/admin/featured/edit" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Change featured items</a>
        </div>

    </div>
</div>

@endsection