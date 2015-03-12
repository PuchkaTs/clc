<article style="margin-top: 60px; margin-bottom: 60px;">
    <div class="row uk-scrollspy-inview"
         data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
        <div class="col-md-6 col-md-offset-3  uk-scrollspy-inview"
             data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
            <h1 class="underlined" style="text-align: center;">УИХ-ын гишүүн С. Ганбаатараас асуух</h1>
            @include('layouts.partials.errors')
            {{ Form::open(['route' => 'contact_path'])}}
            <!-- Name form input -->
            <div class="form-group">
                {{ Form::label('name', 'Нэр:')}}
                {{ Form::text('name', null, ['class' => 'form-control'])}}
            </div>

            <!-- Email form input -->
            <div class="form-group">
                {{ Form::label('email', 'И-мэйл:')}}
                {{ Form::text('email', null, ['class' => 'form-control'])}}
            </div>

            <!-- Phone form input -->
            <div class="form-group">
                {{ Form::label('phone', 'Утас:')}}
                {{ Form::text('phone', null, ['class' => 'form-control'])}}
            </div>

            <!-- Message form input -->
            <div class="form-group">
                {{ Form::label('body', 'Захиа:')}}
                {{ Form::textarea('body', null, ['class' => 'form-control'])}}
            </div>

            <!-- Submit form input -->
            <div class="form-group">
                {{ Form::submit('Илгээх', ['class' => 'btn btn-primary btn-block btnRed'])}}
            </div>

            {{ Form::close()}}
        </div>
    </div>

</article>