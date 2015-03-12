@extends('layouts/default_min')

@section('body')

<div class="placeholder100 row" style="margin-top: 50px;">
    <div class="col-md-8 col-lg-6 col-lg-offset-2 gheader">
        <header>
            <h3>{{ $news->header }} MNT Per Month</h3>
        </header>

    </div>
</div>
<div class="row" id="projects" style="min-height: 500px">
    <div class="col-md-8 col-lg-6 col-lg-offset-2">
            <div class="col-md-12" id="project_by_id">
                @if($image)

                                {!! Html::image("uploads/news/$image->image", null, ['class' => 'width100']) !!}
                @endif()

                <article>{!! $news->body !!}</article>
            </div>
    </div>

    @include('layouts.partials.sidebar')

</div>
<div class="placeholder"></div>


@stop

@section('script')
<script type="text/javascript" charset="utf-8">
//    $(window).load(function() {
//        $('.flexslider').flexslider({
//            animation: "fade",
//            slideshowSpeed: 4000,
//            controlNav: "thumbnails"
//        });
//    });

$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });

  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});


</script>
<script type="text/javascript">
		function updateInputs(newLat, newLng)
		{
		    $( "input[name='xloc']" ).val(newLat);
			// make an ajax request to a PHP file
			// on our site that will update the database
			// pass in our lat/lng as parameters
            $( "input[name='yloc']" ).val(newLng);
		}
	</script>
@stop