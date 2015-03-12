<div class="col-md-4 col-lg-2">
    <aside>
        <article>
            <h6 style="font-style: italic; color: #bbb">Мэдээлэл</h6>
            <h4><span class="glyphicon glyphicon-th-list"></span> Ангилал</h4>
            <div class="list-group">
                @foreach(App\Area::get() as $area)
                    <a href="#" class="list-group-item">{{ $area->name }}</a>
                @endforeach()
            </div>
        </article>
    </aside>
</div>