@extends('layouts.admin-app')

@section('admin-content')



    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="content-page wide-md m-auto">
                        <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                            <div class="nk-block-head-content text-center">
                                <h2 class="nk-block-title fw-normal">{{ $product->title }}</h2>
                                <div class="nk-block-des">
                                    <p class="lead">{{ $product->title_ru }}</p>
                                    <p class="lead">{{ $product->title_arm }}</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner card-inner-xl">
                                    <article class="entry">
                                        <div class="row">
                                            <div class="col-6">
                                                <img src="{{ asset($product->img) }}" alt="">
                                            </div>
                                            <div class="col-6">
                                                <ul>
                                                    <li><strong>price:</strong>{{ $product->price }}</li>
                                                    <li><strong>discount:</strong>{{ $product->discount }}</li>
                                                    <li><strong>slug:</strong>{{ $product->slug }}</li>
                                                    <li><strong>slug_ru:</strong>{{ $product->slug_ru }}</li>
                                                    <li><strong>slug_arm:</strong>{{ $product->slug_arm }}</li>
                                                    <li><strong>length:</strong>{{ $product->length }}</li>
                                                    <li><strong>width:</strong>{{ $product->width }}</li>
                                                    <li><strong>height:</strong>{{ $product->height }}</li>
                                                    <li><strong>kilograms:</strong>{{ $product->kilograms }}</li>
                                                    <li><strong>count:</strong>{{ $product->count }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h3>description</h3>
                                        <p>{{  $product->description  }}</p>
                                        <h3>description_ru</h3>
                                        <p>{{  $product->description_ru  }}</p>
                                        <h3>description_arm</h3>
                                        <p>{{  $product->description_arm  }}</p>
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="{{ route('products.edit', $product->id) }}"><em
                                                        class="icon ni ni-edit"></em><span>Редактировать</span></a></li>
                                            <li>
                                                <form action="{{  route('products.destroy', $product ) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn"><em class="icon ni ni-trash"></em><span>Удалить </span>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </article>
                                    <div id="accordion-2" class="accordion accordion-s3">
                                        <div class="accordion-item">
                                            <a href="#" class="accordion-head" data-toggle="collapse"
                                               data-target="#accordion-item-2-1">
                                                <h6 class="title">Gallery</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse show " id="accordion-item-2-1"
                                                 data-parent="#accordion-2">
                                                <div class="row">
                                                    <h1>asdasda</h1>
{{--                                                    @foreach($product->gallery as $gallery)--}}
{{--                                                        <div class="col-3">--}}
{{--                                                            <img src="{{ asset($gallery->img) }}" alt="gallery">--}}
{{--                                                        </div>--}}
{{--                                                    @endforeach--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                               data-target="#accordion-item-2-2">
                                                <h6 class="title">Add Gallery</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse  " id="accordion-item-2-2"
                                                 data-parent="#accordion-2">
                                                <div class="row single__gallery">
                                                    @foreach($galleries as $gallery)
                                                        <div class="col-3">
                                                            <img src="{{ asset($gallery->img) }}" alt="gallery"
                                                                 data-id="{{ $gallery->id }}">
                                                        </div>
                                                    @endforeach
                                                    <form action="{{ route('productAddCategory') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                               value="{{ $product->id }}">
                                                        <input type="hidden" name="productAddCategory">
                                                        <button class="btn btn-primary"> Add Images</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                    </div><!-- .content-page -->
                </div>
            </div>
        </div>
    </div>
@endsection
