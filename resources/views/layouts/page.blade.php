<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'DaltCasa')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Dalt, Casa, music, Glasgow, Ibiza, top, house, events, club, Joshua, Miller, Craig, community, members, DJs, artists, live, radio">
    <meta name="description" content="@yield('description', 'A members-only music community, providing an eclectic, international, and
     underground line-up, along with a superb crowd.')">
    <meta property="og:description" content="@yield('description', 'A members-only music community, providing an eclectic, international, and
     underground line-up, along with a superb crowd.')">
    <meta property="og:title" content="@yield('title', 'DaltCasa')">
    <meta property="og:type" content="article">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="DaltCasa">
    <meta property="og:image" content="/img/dc.png">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@daltcasa">
    <meta property="twitter:creator" content="@daltcasa">
    <meta msapplication-tilecolor="content">
    <meta msapplication-tileimage="content">
    <meta theme-color="content">
    <meta property="og:fb_appid" content="">
    <link rel="icon" href="/dc-black.png" sizes="150x150" type="image/png">
    <link rel="stylesheet" href="/css/app.css" type="text/css" media="all">
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
    @yield('css', '')
</head>
<body class="top-nav">

    @include('shared.navigation')

    @yield('main')

    @include('shared.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/global.js"></script>
    @yield('js', '')
</body>

</html>