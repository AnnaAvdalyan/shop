@extends('layouts.user-app')
@section('content')

    <main>
        <div class="wrapper">
            <ul class="navigation">
                <li class="navigation__item">
                    <a class="navigation__item-link" href="/">Главная</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__item-link" href="#">Каталог</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__item-link" href="#">Кирпич</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__item-link" href="#">Кирпич полнотелый</a>
                </li>
            </ul>
            <div class="title">
                {{ $product->title }}
            </div>
            <div class="single__product">
                <div class="single__product-item single__product-slider">
                    <div class="single">
                        @for($i=0;$i<10;$i++)
                            <a href="#">
                                <img src="{{ asset($product->img) }}" alt="">
                            </a>
                        @endfor
                    </div>
                    <div class="gallery">
                        @for($i=0;$i<10;$i++)
                            <img src="{{ asset($product->img) }}" alt="">
                        @endfor
                    </div>
                </div>
                <div class="single__product-item single__product-shipping"></div>
                <div class="single__product-item single__product-info">
                    <div class="title">Характеристики</div>
                    <table>
                        <tbody>
                        <tr>
                            <td>Категория:</td>
                            <td>{{ $product->category->name }}</td>
                        </tr>
                        <tr>
                            <td>Размер, мм:</td>
                            <td>{{ $product->width }}* {{ $product->height }}*{{ $product->length }}</td>
                        </tr>
                        <tr>
                            <td>Вес, кг:</td>
                            <td>{{ $product->kilograms }}</td>
                        </tr>
                        <tr>
                            <td>Кол-во</td>
                            <td> {{ $product->count }}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td> {{ $product->price }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="single__product-item single__product-description">
                    <div class="title">ОПИСАНИЕ</div>
                    <p>{{ $product->description }}</p>
                    <div class="border_bottom mt-15 mb-15"></div>
                    <strong>Оплата</strong>
                    <p>Мы принимаем наличные, банковские карты и безналичные расчеты.</p>
                    <div class="border_bottom mt-15 mb-15"></div>
                </div>
            </div>
            <section class="section">
                <div class="wrapper">
                    <div class="section__top title__seeMore">
                        <div class="title">Спецпредложения</div>

                        <a href=" " class="seeMore">Перейти</a>
                    </div>
                    <div class=" home__products">
                        @for($i=0;$i<10;$i++)
                            @foreach($products as $product)
                                @include('layouts.product', compact('product'))
                            @endforeach
                        @endfor
                    </div>
                </div>
            </section>
            <div class="wrapper">
                <div class="border_bottom"></div>
            </div>

            <section class="section">
                <div class="wrapper">
                    <div class="section__top title__seeMore">
                        <div class="title">Спецпредложения</div>

                        <a href=" " class="seeMore">Перейти</a>
                    </div>
                    <div class=" home__products">
                        @for($i=0;$i<10;$i++)
                            @foreach($products as $product)
                                @include('layouts.product', compact('product'))
                            @endforeach
                        @endfor
                    </div>
                </div>
            </section>

        </div>
    </main>


@endsection


