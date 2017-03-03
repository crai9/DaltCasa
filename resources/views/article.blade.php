@extends('layouts.page')

@section('title', $article->title . ' - DaltCasa' )
@section('description', $article->introduction)
@section('image', $article->image)

@section('main')

<div class="container">

    <article>

        <h1 class="post-title">{{ $article->title }}</h1>
        <br>
        <span class="article-details">
            <span class="glyphicon glyphicon-time faded-icon" aria-hidden="true"></span>
            {{ Carbon\Carbon::parse($article->created_at)->format('l, jS F Y') }} ·
            <span class="text-muted">by </span><a class="authors" href="/articles/by/{{ $article->writer->id }}">{{ $article->writer->name }}</a> ·
            <span class="glyphicon glyphicon-comment faded-icon" aria-hidden="true"></span>
            <a href="#disqus_thread" class="disqus-comment-count authors" data-disqus-identifier="{{ $article->id }}">0</a>


        </span>
        <hr width="95%" size="6">
        <p class="introduction">{{ $article->introduction}}</p>

        {!! $article->body !!}

    </article>
    <div id="disqus_thread" class="disqus_thread"></div>

    <script>

    var PAGE_URL = "{{ Request::fullUrl() }}";
    var PAGE_IDENTIFIER = "{{ $article->id }}";

    var disqus_config = function () {
         this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
         this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };

    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = '//daltcasa.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
    </script>
    <script id="dsq-count-scr" src="//daltcasa.disqus.com/count.js" async></script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


</div>

@endsection