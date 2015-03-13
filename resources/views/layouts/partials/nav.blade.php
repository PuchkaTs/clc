<div class="quick-access" style="position: fixed; z-index: 99;">
    <div class="container">
            @if($shots = App\Shot::get())
            <ul id="slideshowShot" class="pull-left hidden-xs">
                @foreach($shots as $index => $shot)
                @if($index == 0)
                <li class="next">
                        <p>{{ $shot->message }}
                        </p>
                </li>
                @else
                <li>
                        <p>{{ $shot->message }}
                        </p>
                </li>
                @endif()

                @endforeach()
            </ul>
            @endif()
        <p class="pull-right icons"><a href="" target="_blank"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="" target="_blank"><i class="fa fa-youtube"></i></a><a href="#"><i class="fa fa-soundcloud"></i></a></p>
    </div>
</div>

<div style="height: 34px;"></div>

<header class="mainheader">
    <nav class="navbar navbar-default role="navigation" >
    <div class="container">
        <div class="slidenav1" id="navslide">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand animated fadeInDown hidden-xs hidden-sm" href="/">{!! Html::image("logo.png") !!}</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ set_active('/') }}"><a href="/">Home</a></li>
                    <li class="{{ Request::is('portfolio') ? 'active' : '' }}"><a href="/portfolio">Portfolio</a></li>
                    <li class="{{ Request::is('available') ? 'active' : '' }}"><a href="/available">Available property</a></li>
                    <li class="{{ Request::is('map') ? 'active' : '' }}"><a href="/portfolio">Map</a></li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>
                   </ul>
            </div>
        </div>

    </div>

    </nav>

</header>
