@extends('layouts/default_min')

@section('css')

<link rel="stylesheet" type="text/css" href="css/hover_css/component.css"/>
<link rel="stylesheet" type="text/css" href="css/flexslider/flexslider2.css"/>
@stop

@section('body')
{!! $map['html'] !!}

<div class="container noPadding">

    <article id="home_text" style="margin:45px 20px;">

        <h3 class="underlined"><i class="fa fa-users"></i>{!!' ' . $header!!}</h3>
        <div class="white_background">
            {!! Html::image("uploads/office.jpg", null, ['class'=>'width100']) !!}
            <div style="padding: 40px;"> {!!$body!!} </div>
        </div>

    </article>

    <article style="margin:45px 20px;">
        <h3><i class="fa fa-home"></i> Last Properties for rent</h3>
        <div class="flexslider flexslider2">
            <ul class="slides">
                @if($projects)
                    @foreach($projects as $project)
                    <li>
                        <a href="{{ route('project_path', $project->id) }}" ><img src="uploads/projects/430x200/{{ $project->image->first() ? $project->image->first()->image : '1.jpg' }}" /></a>
                        <figcaption>
                            <h4>{!! link_to_route('project_path', $project->title, $project->id)!!}</h4>
                            <h5><i class="fa fa-usd" style="width: 15px;"></i>{{ number_format($project->price) }} MNT Per Month</h5>
                            <div><p>{{ $project->shorten(100)}} {!! link_to_route('project_path', 'Read more', $project->id, ['class' => 'more'])!!}</p></div>
                        </figcaption>
                    </li>
                    @endforeach()
                @endif
            </ul>
        </div>

    </article>
</div>
@include('layouts.partials.flexslider')

<div class="container noPadding">


    <article style="margin:45px 20px;">
        <h3><i class="fa fa-home"></i> News</h3>
            @if($news)
                @foreach($news as $anews)
                    <div class="row white_background" style="margin-bottom: 50px;">

                        <div class="col-md-6" style="padding-left: 0px;">
                             <div>
                                <a href="{{ route('news_path', $anews->id) }}" ><img src="uploads/news/560x300/{{ $anews->image->first() ? $anews->image->first()->image : '1.jpg' }}" /></a>
                             </div>
                        </div>
                        <div class="col-md-6" style="padding-bottom: 30px; padding-right: 30px;">

                             <h3>{{ $anews->header }}</h3>
                             <div>
                                {!! $anews->shorten() !!}
                                <p>{!! link_to_route('news_path', 'Read more', $anews->id, ['class' => 'more'])!!}</p>
                             </div>
                        </div>
                    </div>
            @endforeach()
        @endif
    </article>


</div>


@stop


@section('script')
{!! $map['js'] !!}
@stop

