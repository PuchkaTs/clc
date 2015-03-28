<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta-title', 'CLC Real Estate')</title>
    <meta name="description" content="Web design, development, product branding, marketing firm">
    <meta name="author" content="AirKreativ">
    {{--<link rel="stylesheet" type="text/css" href="/css/css_uikit/uikit.min.css">--}}
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/image_css/style1.css">
    <link rel="stylesheet" type="text/css" href="/css/image_css/style_common.css">
    <link rel="stylesheet" type="text/css" href="/css/flexslider/flexslider.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="icon" href="/favicon.ico">
    <script src="/js/respond.min.js"></script>
    @yield('css')
</head>

<body>
{{--@include('layouts.partials.google')--}}
@include('layouts.partials.nav')
@yield('body')
<div class="container-fluid">

    {{--@include('flash::message')--}}

</div>
@include('layouts.partials.footer')
@yield('footer')
<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
{{--<script src="/js/js_uikit/uikit.min.js"></script>--}}
<script src="/js/jquery-scrollspy.js"></script>
<script src="/js/flexslider/jquery.flexslider-min.js"></script>
<script src="/js/air.js"></script>
@yield('script')
@yield('script_flex')
</body>
</html>