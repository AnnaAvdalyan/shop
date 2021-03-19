<div class="product">
    <div class="product__img">
        <img src="{{ asset($product->img) }}" alt="product">
    </div>
    <div class="product__title">
{{--        <a href="{{ route('product',$product->title) }}">--}}
            {{ $product->title }}
{{--        </a> --}}
        </div>
    <div class="cart__buy">
        <div class="d-flex align-center">
            <div class="sale__price">{{ $product->price }}₽</div>
            <div class="full__price">4 430₽</div>
        </div>

        <!--                        <button class="buy cart__buy-btn"></button>-->
    </div>
    <div class="product__bottom">
        <button class="buy"><span>В корзину</span></button>
        <a href="#" class="product__like"></a>
    </div>
</div>
