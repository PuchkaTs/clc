@extends('layouts/default_min')

@section('css')

<link rel="stylesheet" type="text/css" href="css/hover_css/component.css"/>
@stop

@section('content')

@include('layouts.partials.flexslider')
<div class="container" style="">

    <article class="row policy" style="min-height: 500px;">
        @if($career)
        <h1 class="underlined">{{ $career->header }}</h1>
        <p>{{ $career->body }}</p>
        @endif()
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