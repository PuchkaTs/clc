@extends('layouts/default_min')

@section('body')
    {!! $map['html'] !!}

    <div class="placeholder100 row" style="margin-top: 50px;">
        <div class="col-md-8 col-lg-6 col-lg-offset-2 gheader">
            <header>
                <h3>{{ $project->title }}</h3>
                <h5>{{ number_format($project->price) }} MNT Per Month</h5>
            </header>

        </div>
    </div>
<div class="row" id="projects" style="min-height: 500px">
    <div class="col-md-8 col-lg-6 col-lg-offset-2">
            <div class="col-md-12" id="project_by_id">
                <article>
                     {!! Form::open(['method' => 'post', 'route' => ['project_edit_path', $project->id]])!!}
                         <!-- Xloc form input -->
                         <div class="form-group">
                             {!! Form::label('xloc', 'Xloc:') !!}
                             {!! Form::text('xloc', null, ['class' => 'form-control']) !!}
                         </div>
                         <!-- Yloc form input -->
                         <div class="form-group">
                             {!! Form::label('yloc', 'Yloc:') !!}
                             {!! Form::text('yloc', null, ['class' => 'form-control']) !!}
                         </div>

                         <!-- Submit form input -->
                         <div class="form-group">
                             {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block'])!!}
                         </div>
                     {!! Form::close()!!}
                </article>
                @if($project->image()->count())
                    <div id="slider" class="flexslider">
                        <ul class="slides">
                            @foreach($project->image()->orderBy('position', 'asc')->get() as $image)
                            <li>
                                {!! Html::image("uploads/projects/$image->image") !!}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                     <div id="carousel" class="flexslider">
                        <ul class="slides">
                            @foreach($project->image()->orderBy('position', 'asc')->get() as $image)
                            <li>
                                {{--{{ asset('uploads/projects/' . $image->image)}}--}}
                                {!! Html::image("uploads/projects/430x200/$image->image") !!}
                            </li>
                            @endforeach
                        </ul>
                     </div>
                @endif()

                    <article>
                        <h4>Property Description</h4>
                        <div>
                            <p>{!! $project->description!!}</p>
                        </div>
                    </article>
                    <article class="row" style="padding-top: 0px; margin-left: 0px;">
                        <h4>Property Details</h4>
                        @include('layouts.partials.project.details')
                    </article>

                    <article class="row" style="padding-top: 0px; margin-left: 0px;">
                        <h4>Property Features</h4>
                        <div>
                            @foreach($project->features as $feature)
                            <div class="col-md-4 col-sm-6">
                                <p><i class="fa fa-check-square-o"></i>   {{ $feature->name}}</p>
                            </div>
                            @endforeach
                        </div>
                    </article>

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
{!! $map['js'] !!}
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