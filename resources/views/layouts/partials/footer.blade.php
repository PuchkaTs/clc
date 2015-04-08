<footer class="footer uk-scrollspy-inview"
        data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
    <div class="row uk-scrollspy-inview"
         data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">

        <!--        <p class="center">{{ App::getLocale() == 'en' ? HTML::image("logo_lg_en.png") : HTML::image("logo_lg_mn.png")}}</p>-->

        <div class="col-md-3  col-xs-offset-1 ">
            <h4><span class="glyphicon glyphicon-map-marker"></span> Ulaanbaatar, Mongolia.</h4>

            <p> Sukhbaatar district </p>

            <p> khoroolol </p>

            <p> building #6 </p>
        </div>

        <div class="col-md-3 col-xs-offset-1">
            <h4><span class="glyphicon glyphicon-earphone"></span> Want to talk?</h4>
            @foreach(App\Contact::limit(3)->get() as $contact)
                <p>mobile: +976-{{$contact->phone}}</p>
            @endforeach
        </div>

        <div class="col-md-3 col-xs-offset-1">
            <h4><span class="glyphicon glyphicon-envelope"></span> Stay connected.</h4>
            @foreach(App\Contact::limit(3)->get() as $contact)
                <p> email: <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
            @endforeach
            <br>
        </div>

    </div>
    <div id="copyright">
            <p class="center" style="font-size: 0.8em; margin: 30px auto; text-align: center">CLC Real Estate | <a href="http://airkreativ.com/" target="_blank" style="color: #ffffff;"> Copyright ©2015 </a>
                | All Rights Reserved
            </p>
        </div>
</footer>