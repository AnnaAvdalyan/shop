<aside class="filter">
    <div class="categories__filter">
        <div class="title">
            Каталог
        </div>
        <ul class="categories__filter-list">
            @foreach($categories as $cat)
                @if($category->id == $cat->id)
                    <li class="categories__filter-item categories__filter-item__active "><a
                            href="{{ route('category',$cat->name) }}"> {{ $cat->name }}</a></li>
                @else
                    <li class="categories__filter-item"><a
                            href="{{ route('category',$cat->name) }}"> {{ $cat->name }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
{{--        <div>--}}
{{--            <div class="group">--}}
{{--                <input type="checkbox" id="inp_1">--}}
{{--                <label for="inp_1"> Wienerberger</label>--}}
{{--            </div>--}}
{{--            <div class="group">--}}
{{--                <input type="checkbox" id="inp_2">--}}
{{--                <label for="inp_2"> Wienerberger</label>--}}
{{--            </div>--}}
{{--            <div class="group">--}}
{{--                <input type="checkbox" id="inp_3">--}}
{{--                <label for="inp_3"> Wienerberger</label>--}}
{{--            </div>--}}
{{--            <div class="group">--}}
{{--                <input type="checkbox" id="inp_4">--}}
{{--                <label for="inp_4"> Wienerberger</label>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</aside>
