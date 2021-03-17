

@extends('layouts.master')
@section('content')
    <div class="starter-template">

        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($order->products as $product)
                    <tr>
                    <td>
                        <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_64">
                            <img height="56px" src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
                            {{ $product->title }}
                        </a>
                    </td>
                    <td><span class="badge" style="color:black">{{ $product->count }}</span>
                        <div class="btn-group form-inline">

                            <form action="{{ route('basketRemove', $product->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">-</button>
                            </form>
                            <form action="{{ route('basketAdd', $product->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-success">+</button>
                            </form>

                        </div>
                    </td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->getPriceForCount($product->count) }}</td>
                </tr>
                @endforeach

                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>{{ $order->getFullPrice() }}</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="{{ route('order') }}">Оформить заказ</a>
            </div>
        </div>
    </div>
@endsection
