@extends('layouts.page')

@section('main')

<div class="container">
    <article>
        <h1 class="post-title">Music</h1>

        <iframe width="100%" height="400" src="https://www.mixcloud.com/widget/iframe/?feed={{ $musics->get($musics->count() - 1)->link }}" frameborder="0"></iframe>
        <br>

        @for ($i=$musics->count() - 2; $i>=0; $i--)
            <iframe width="100%" height="60" src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&mini=1&feed={{ $musics->get($i)->link }}" frameborder="0"></iframe>
            <br>
        @endfor

    </article>
</div>

@endsection
