@extends('...layouts.main')

@section('content')

<div class="placeholder100 row" style="margin-top: 50px;">
    <div class="col-md-8 col-lg-6 col-lg-offset-2 gheader">
        <header>
            <h3>Portfolio</h3>
        </header>

    </div>
</div>
<div class="row" id="projects" style="min-height: 500px">
    <div class="col-md-8 col-lg-6 col-lg-offset-2">
            <div class="col-md-12" id="project_by_id">
                    @foreach($projects as $project)
                        <article class="col-md-6">
                            <a href="{{ route('project_path', $project->id) }}" ><img src="uploads/projects/430x200/{{ $project->image->first() ? $project->image->first()->image : '1.jpg' }}" /></a>
                            <figcaption>
                                <h4>{!! link_to_route('project_path', $project->title, $project->id)!!}</h4>
                                <div><p>{{ $project->shorten(100)}} {!! link_to_route('project_path', 'Read more', $project->id, ['class' => 'more'])!!}</p></div>
                            </figcaption>
                        </article>

                    @endforeach
                    <div> {!! $projects->render() !!}</div>
            </div>
    </div>

    @include('layouts.partials.sidebar')

</div>


@stop
