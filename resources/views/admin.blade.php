@extends('layouts.page')

@section('main')

<div class="container">

    <div class="main">

        <h1 class="post-title">Admin Home</h1>
        <div class="list-group">
            <a href="admin/article/create" class="list-group-item">New article</a>
            <a href="admin/article" class="list-group-item">Manage articles</a>
            <a href="#" class="list-group-item">New music</a>
            <a href="#" class="list-group-item">Manage music</a>
            <a href="#" class="list-group-item">Change featured items</a>
        </div>

    </div>
</div>

@endsection