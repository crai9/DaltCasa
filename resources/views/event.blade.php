@extends('layouts.page')

@section('title', $event->title . ' - DaltCasa' )

@section('main')

<div class="container">

    <article>

        <h1 class="post-title">{{ $event->title }}</h1>
        <div class="article-details">
            <span class="glyphicon glyphicon-time faded-icon" aria-hidden="true"></span>
            <span class="by"> {{ Carbon\Carbon::parse($event->date)->toFormattedDateString() }} - {{ Carbon\Carbon::parse($event->time)->format('H:i A') }} </span>
            <br>
            <span class="glyphicon glyphicon-map-marker faded-icon" aria-hidden="true"></span>
            <span class="by">{{ $event->address }}</span>
            <br>
            <span class="text-muted by">Created by </span><a class="authors by" href="/articles/by/{{ $event->owner->id }}">{{ $event->owner->name }}</a>
        </div>
        <hr width="95%" size="6">
        {!! $event->map_iframe !!}
        <br>
        <h4 class="post-title" style="font-size: 22px">Event Details</h4>

        {!! $event->body !!}

    </article>
    <div id="disqus_thread" class="disqus_thread"></div>

    <script>

        var PAGE_URL = "{{ Request::fullUrl() }}";
        var PAGE_IDENTIFIER = "{{ $event->unique_slug }}";

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