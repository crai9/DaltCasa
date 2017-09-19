@extends('layouts.page')

@section('title', $music->title . ' - DaltCasa' )

@section('main')

<div class="container">

    <article>

        <h1 class="post-title">{{ $music->title }}</h1>
        <br>
        <span class="article-details">
            <span class="glyphicon glyphicon-time faded-icon" aria-hidden="true"></span>
            {{ Carbon\Carbon::parse($music->created_at)->format('l, jS F Y') }} ·
            <span class="text-muted">posted by </span><a class="authors" href="/articles/by/{{ $music->writer->id }}">{{ $music->writer->name }}</a> ·
            <span class="glyphicon glyphicon-comment faded-icon" aria-hidden="true"></span>
            <a href="#disqus_thread" class="disqus-comment-count authors" data-disqus-identifier="{{ $music->id }}">0</a>


        </span>
        <hr width="95%" size="6">
        <iframe width="100%" height="400" src="{{ $music->iframe_src }}" frameborder="0"></iframe>


        {!! $music->body !!}

    </article>
    <div id="disqus_thread" class="disqus_thread"></div>

    <script>

        var PAGE_URL = "{{ Request::fullUrl() }}";
        var PAGE_IDENTIFIER = "{{ $music->unique_slug }}";

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