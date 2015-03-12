@extends('layouts/default_min')

@section('css')

<link rel="stylesheet" type="text/css" href="css/hover_css/component.css"/>
<script type="text/javascript" src="//cdn.sublimevideo.net/js/l38se7cr.js"></script>
@stop

@section('content')

@include('layouts.partials.flexslider')
<div class="container" style="">
    <article class="row" style=" background-color: #F1F4F9">
        <div class="gheader">
                <h3 class="underlined" style="color: rgba(0,0,0,0.4)">Дүрст бичлэг</h3>

        </div>

        @foreach($videos as $index => $video)
        <div class="col-sm-6 col-md-4 noPadding">
            <div class="thumbnail thumb{{ $index }}">
                <h3>{{ $video->title }}</h3>
                    <video id="{{ $video->video }}" class="sublime" width="360" height="200" title="Оюу Толгойн луйвар" data-uid="{{ $video->video }}" data-youtube-id="{{ $video->video }}" data-autoresize="fit" preload="none">
                    </video>

                <div class="caption">

                    <p>{{ $video->shorten(100) }}</p>

                    <p><a href="video/{{$video->id}}" class="btn btn-primary btn-block btnRed" role="button">Дэлгэрэнгүй</a></p>
                </div>
            </div>
        </div>
        @endforeach()

    </article>



</div>

<!--<div id="disqus_thread"></div>-->
<!--<script type="text/javascript">-->
<!--    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */-->
<!--    var disqus_shortname = 'ganbaatar'; // required: replace example with your forum shortname-->
<!---->
<!--    /* * * DON'T EDIT BELOW THIS LINE * * */-->
<!--    (function() {-->
<!--        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;-->
<!--        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';-->
<!--        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);-->
<!--    })();-->
<!--</script>-->
<!--<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>-->
<!--<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>-->

@stop