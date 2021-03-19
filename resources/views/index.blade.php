@extends('layouts.user-app')
@section('content')
    <main>
        <div class="wrapper">
            <div class="home__section-slider">
                <div class="slider">
                    <div class="slider__item">
                        <div class="slider__item-inner">
                            <h2>Сцепление в сборе</h2>
                            <p>0AMCLUTCH</p>
                            <p class="price">14 499,99 ₽</p>
                            <button class="buy"><span>В корзину</span></button>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-inner">
                            <h2>Сцепление в сборе</h2>
                            <p>0AMCLUTCH</p>
                            <p class="price">14 499,99 ₽</p>
                            <button class="buy"><span>В корзину</span></button>
                        </div>
                    </div>
                </div>
                <div class="cart-sale">
                    <div class="cart-sale__item">
                        <div class="cart-sale__img">
                            <img src="images/cart_1.png" alt="">
                        </div>
                        <div class="cart-sale__text">
                            <h2>Обгонная муфта гидротрансформатор</h2>
                            <p>BW-SP-2 SONNAX</p>
                            <div class="cart__buy">
                                <div class="d-flex align-center">
                                    <div class="sale__price">4 430₽</div>
                                    <div class="full__price">4 430₽</div>
                                </div>

                                <button class="buy cart__buy-btn">
                                    <!--                                <svg>-->
                                    <!--                                    <use xlink:href='images/sprite.svg#work__icon_1'></use>-->
                                    <!--                                </svg>-->
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="cart-sale__item">
                        <div class="cart-sale__img">
                            <img src="images/cart_1.png" alt="">
                        </div>
                        <div class="cart-sale__text">
                            <h2>Обгонная муфта гидротрансформатор</h2>
                            <p>BW-SP-2 SONNAX</p>
                            <div class="cart__buy">
                                <div class="d-flex align-center">
                                    <div class="sale__price">4 430₽</div>
                                    <div class="full__price">4 430₽</div>
                                </div>

                                <button class="buy cart__buy-btn">
                                    <!--                                <svg>-->
                                    <!--                                    <use xlink:href='images/sprite.svg#work__icon_1'></use>-->
                                    <!--                                </svg>-->
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="categories__slider">
            <div class="wrapper">
                <div class="categories__slider-inner">

                    @foreach($categories as $category)
                        <div class="categories__slider-item">
                            <h2 class="categories__slider-title"> {{ $category->name }} </h2>
                            <p>Трансмиссионное масло;
                                <br>
                                присалка в масло акпп</p>
{{--                            <button>Перейти</button>--}}
                            <a href="#">Перейти</a>
                            <img src="{{ asset('assets/images/cat_1.png') }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @foreach($categories as $category)
            <section class="section">
                <div class="wrapper">
                    <div class="section__top title__seeMore">
                        <div class="title">{{ $category->name }}</div>
                        <a href="{{ route('category',$category->name) }}" class="seeMore">Перейти</a>
                    </div>
                    <div class=" home__products">
                        @for($i=0;$i<10;$i++)
                            @foreach($category->product as $product)
                                @include('layouts.product', compact('product'))
                            @endforeach
                        @endfor
                    </div>
                </div>
            </section>
        @endforeach
    </main>

@endsection


