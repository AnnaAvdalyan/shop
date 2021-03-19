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
                {{ $category->name }}
            </div>
            <div class="grid mt-35">
                @include('layouts.sitebar', compact('categories','category'))
                <div class="content">
                    <div class="advertising_1" style="background: #005BB9">
                        <h2>Рекламный баннер 1</h2>
                    </div>
                    <div class="products mt-35">
                        @for($i=0;$i<10;$i++)
                            @foreach($category->product as $product)
                                @include('layouts.product', compact('product'))
                            @endforeach
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <!--    <div class="wrapper">-->
        <!--        <div class="home__section-slider">-->
        <!--            <div class="slider">-->
        <!--                <div class="slider__item">-->
        <!--                    <div class="slider__item-inner">-->
        <!--                        <h2>Сцепление в сборе</h2>-->
        <!--                        <p>0AMCLUTCH</p>-->
        <!--                        <p class="price">14 499,99 ₽</p>-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="slider__item">-->
        <!--                    <div class="slider__item-inner">-->
        <!--                        <h2>Сцепление в сборе</h2>-->
        <!--                        <p>0AMCLUTCH</p>-->
        <!--                        <p class="price">14 499,99 ₽</p>-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="cart-sale">-->
        <!--                <div class="cart-sale__item">-->
        <!--                    <div class="cart-sale__img">-->
        <!--                        <img src="images/cart_1.png" alt="">-->
        <!--                    </div>-->
        <!--                    <div class="cart-sale__text">-->
        <!--                        <h2>Обгонная муфта гидротрансформатор</h2>-->
        <!--                        <p>BW-SP-2 SONNAX</p>-->
        <!--                        <div class="cart__buy">-->
        <!--                            <div class="d-flex align-center">-->
        <!--                                <div class="sale__price">4 430₽</div>-->
        <!--                                <div class="full__price">4 430₽</div>-->
        <!--                            </div>-->

        <!--                            <button class="buy cart__buy-btn">-->
        <!--                                &lt;!&ndash;                                <svg>&ndash;&gt;-->
        <!--                                &lt;!&ndash;                                    <use xlink:href='images/sprite.svg#work__icon_1'></use>&ndash;&gt;-->
        <!--                                &lt;!&ndash;                                </svg>&ndash;&gt;-->
        <!--                            </button>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="cart-sale__item">-->
        <!--                    <div class="cart-sale__img">-->
        <!--                        <img src="images/cart_1.png" alt="">-->
        <!--                    </div>-->
        <!--                    <div class="cart-sale__text">-->
        <!--                        <h2>Обгонная муфта гидротрансформатор</h2>-->
        <!--                        <p>BW-SP-2 SONNAX</p>-->
        <!--                        <div class="cart__buy">-->
        <!--                            <div class="d-flex align-center">-->
        <!--                                <div class="sale__price">4 430₽</div>-->
        <!--                                <div class="full__price">4 430₽</div>-->
        <!--                            </div>-->

        <!--                            <button class="buy cart__buy-btn">-->
        <!--                                &lt;!&ndash;                                <svg>&ndash;&gt;-->
        <!--                                &lt;!&ndash;                                    <use xlink:href='images/sprite.svg#work__icon_1'></use>&ndash;&gt;-->
        <!--                                &lt;!&ndash;                                </svg>&ndash;&gt;-->
        <!--                            </button>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->

        <!--    <div class="categories__slider">-->
        <!--        <div class="wrapper">-->
        <!--            <div class="categories__slider-inner">-->
        <!--                <div class="categories__slider-item">-->
        <!--                    <h2 class="categories__slider-title"> Масла </h2>-->
        <!--                    <p>Трансмиссионное масло;-->
        <!--                        <br>-->
        <!--                        присалка в масло акпп</p>-->
        <!--                    <button>Перейти</button>-->
        <!--                    <img src="images/cat_1.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="categories__slider-item">-->
        <!--                    <h2 class="categories__slider-title"> Масла </h2>-->
        <!--                    <p>Трансмиссионное масло;-->
        <!--                        <br>-->
        <!--                        присалка в масло акпп</p>-->
        <!--                    <button>Перейти</button>-->
        <!--                    <img src="images/cat_1.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="categories__slider-item">-->
        <!--                    <h2 class="categories__slider-title"> Масла </h2>-->
        <!--                    <p>Трансмиссионное масло;-->
        <!--                        <br>-->
        <!--                        присалка в масло акпп</p>-->
        <!--                    <button>Перейти</button>-->
        <!--                    <img src="images/cat_1.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="categories__slider-item">-->
        <!--                    <h2 class="categories__slider-title"> Масла </h2>-->
        <!--                    <p>Трансмиссионное масло;-->
        <!--                        <br>-->
        <!--                        присалка в масло акпп</p>-->
        <!--                    <button>Перейти</button>-->
        <!--                    <img src="images/cat_1.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="categories__slider-item">-->
        <!--                    <h2 class="categories__slider-title"> Масла </h2>-->
        <!--                    <p>Трансмиссионное масло;-->
        <!--                        <br>-->
        <!--                        присалка в масло акпп</p>-->
        <!--                    <button>Перейти</button>-->
        <!--                    <img src="images/cat_1.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="categories__slider-item">-->
        <!--                    <h2 class="categories__slider-title"> Масла </h2>-->
        <!--                    <p>Трансмиссионное масло;-->
        <!--                        <br>-->
        <!--                        присалка в масло акпп</p>-->
        <!--                    <button>Перейти</button>-->
        <!--                    <img src="images/cat_1.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="categories__slider-item">-->
        <!--                    <h2 class="categories__slider-title"> Масла </h2>-->
        <!--                    <p>Трансмиссионное масло;-->
        <!--                        <br>-->
        <!--                        присалка в масло акпп</p>-->
        <!--                    <button>Перейти</button>-->
        <!--                    <img src="images/cat_1.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="categories__slider-item">-->
        <!--                    <h2 class="categories__slider-title"> Масла </h2>-->
        <!--                    <p>Трансмиссионное масло;-->
        <!--                        <br>-->
        <!--                        присалка в масло акпп</p>-->
        <!--                    <button>Перейти</button>-->
        <!--                    <img src="images/cat_1.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="categories__slider-item">-->
        <!--                    <h2 class="categories__slider-title"> Масла </h2>-->
        <!--                    <p>Трансмиссионное масло;-->
        <!--                        <br>-->
        <!--                        присалка в масло акпп</p>-->
        <!--                    <button>Перейти</button>-->
        <!--                    <img src="images/cat_1.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="categories__slider-item">-->
        <!--                    <h2 class="categories__slider-title"> Масла </h2>-->
        <!--                    <p>Трансмиссионное масло;-->
        <!--                        <br>-->
        <!--                        присалка в масло акпп</p>-->
        <!--                    <button>Перейти</button>-->
        <!--                    <img src="images/cat_1.png" alt="">-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->

        <!--    <section class="section">-->
        <!--        <div class="wrapper">-->
        <!--            <div class="section__top title__seeMore">-->
        <!--                <div class="title">Спецпредложения</div>-->
        <!--                <a href="#" class="seeMore">Перейти в раздел скидок</a>-->
        <!--            </div>-->
        <!--            <div class="products home__products">-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </section>-->

        <!--    <section class="section">-->
        <!--        <div class="wrapper">-->
        <!--            <div class="section__top title__seeMore">-->
        <!--                <div class="title">Спецпредложения</div>-->
        <!--                <a href="#" class="seeMore">Перейти в раздел скидок</a>-->
        <!--            </div>-->
        <!--            <div class="products home__products">-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </section>-->

        <!--    <section class="section">-->
        <!--        <div class="wrapper">-->
        <!--            <div class="section__top title__seeMore">-->
        <!--                <div class="title">Спецпредложения</div>-->
        <!--                <a href="#" class="seeMore">Перейти в раздел скидок</a>-->
        <!--            </div>-->
        <!--            <div class="products home__products">-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="product">-->
        <!--                    <div class="product__img">-->
        <!--                        <img src="images/product.png" alt="product">-->
        <!--                    </div>-->
        <!--                    <div class="product__title">Intermediate accumelator sleeve</div>-->
        <!--                    <div class="cart__buy">-->
        <!--                        <div class="d-flex align-center">-->
        <!--                            <div class="sale__price">4 430₽</div>-->
        <!--                            <div class="full__price">4 430₽</div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash;                        <button class="buy cart__buy-btn"></button>&ndash;&gt;-->
        <!--                    </div>-->
        <!--                    <div class="product__bottom">-->
        <!--                        <button class="buy"><span>В корзину</span></button>-->
        <!--                        <a href="#" class="product__like"></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </section>-->
    </main>
@endsection


