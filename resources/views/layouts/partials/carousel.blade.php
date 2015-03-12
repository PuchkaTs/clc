@if(Banner::get()->count())
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
<!--    <ol class="carousel-indicators">-->
<!--        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
<!--        <li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
<!--        <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
<!--    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach(Banner::get() as $index => $banner)
        <div class="item {{ $index == 0 ? "active" : "" }}">
            {{ HTML::image("uploads/banner/$banner->image") }}

            <div class="carousel-caption">
                <h3>{{ $banner->title }} </h3>

                <p>{{ $banner->description }}</p>
            </div>
        </div>
        @endforeach
        ...
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

@endif

