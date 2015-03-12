@extends('layouts/default_min')

@section('content')
<div class="placeholder100 row">
    <div class="col-md-8 col-lg-6 col-lg-offset-2 gheader">
        <header>
            <h2>Мэдээлэл</h2>
            <h6>Улс төрийн мэдээлэл</h6>
        </header>

    </div>
</div>
<div class="row" id="projects" style="min-height: 700px; margin-bottom: 50px;">
    <div class="col-md-8 col-lg-6 col-lg-offset-2">

        @foreach($projects as $project)
            <div class="col-md-12">
                <article class="project">
                    <h4>{{ $project->title }}</h4>
                    @if($project->image->count())
                        {{ HTML::image("uploads/projects/thumbs/" . $project->image->first()->image) }}
                    @else
                        {{ HTML::image("uploads/projects/thumbs/bla.jpg") }}
                    @endif
                    <div class="text">
                        <p class="subdate">{{ $project->created_at->diffForHumans() }}</p>
                        <p>{{ $project->shorten(200) }} {{ link_to_route('news_path', 'Дэлгэрэнгүй', $project->id, ['class' => 'more'])}}
                        </p>
                    </div>


                </article>

            </div>
        @endforeach
        <div> {{ $projects->links() }}</div>
    </div>
@include('layouts.partials.sidebar')

</div>
<div class="placeholder"></div>


@stop