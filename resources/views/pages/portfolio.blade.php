@extends('layouts.default_min')

@section('body')

<div class="placeholder100 row" style="margin-top: 50px;">
    <div class="col-md-8 col-lg-6 col-lg-offset-2 gheader">
        <header>
            <h3>Portfolio</h3>
        </header>

    </div>
</div>
<div class="row" id="projects" style="min-height: 500px">
    <div class="col-md-8 col-lg-6 col-lg-offset-2">
            <div class="col-md-12 white_background" style="padding: 35px 20px; margin-bottom: 45px;">
                    @foreach($projects as $project)
                        <article class="col-md-6" style="height: 400px;">
                            <a href="{{ route('project_path', $project->id) }}" >{!! Html::image($project->iffirstimg(), null, ['class'=>'width100']) !!}</a>
                            <figcaption>
                                <h4>{!! link_to_route('project_path', $project->title, $project->id)!!}</h4>
                                <h5><i class="fa fa-usd" style="width: 15px;"></i>{{ number_format($project->price) }} MNT Per Month</h5>
                                <div><p>{{ $project->shorten(100)}} {!! link_to_route('project_path', 'Read more', $project->id, ['class' => 'more'])!!}</p></div>
                            </figcaption>
                        </article>

                    @endforeach
                    <div style="text-align: center"> {!! $projects->render() !!}</div>
            </div>
    </div>

    @include('layouts.partials.sidebar')

</div>


@stop
