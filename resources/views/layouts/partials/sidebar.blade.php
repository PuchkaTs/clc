<div class="col-md-4 col-lg-2">
    <aside>
        <article>
            <h6 style="font-style: italic; color: #bbb">Filter by</h6>
            <h4><span class="glyphicon glyphicon-th-list"></span> Area</h4>
            <div class="list-group">
                @foreach(App\Area::get() as $area)
                {!! link_to_action('PagesController@inarea', $area->name, [$area->id], ['class' => 'list-group-item']);!!}
                @endforeach()
            </div>
        </article>
    </aside>
</div>