@extends('layouts.admin-app')

@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">
                                    @if(isset($editProduct))
                                        Добавить продукт
                                    @else
                                        Редактировать продукт
                                    @endif
                                </h3>
                                <div class="nk-block-des text-soft">
{{--                                    <p>You have total 95 projects.</p>--}}
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                       data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                </div><!-- .toggle-wrap 095566585 -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                </div>
                <div class="nk-block">
                    <form action="  @if(isset($editProduct))  {{ route('products.update' ,$editProduct) }}    @else {{ route('products.store') }} @endif" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($editProduct))
                            @method('PUT')
                        @endif
                        @if($errors->all())
                            @foreach($errors->all() as $error)
                                <div class="col-6">
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        @if(Session::has('success'))
                            <div class="col-6">
                                <div class="alert alert-primary" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            </div>
                        @endif
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="exampleFormControlInput1"
                                                       @if(isset($editProduct)) value="{{ $editProduct->title }}"   @endif
                                                       name="title">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">Title
                                                    Ru</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="exampleFormControlInput2"
                                                       @if(isset($editProduct)) value="{{ $editProduct->title_ru }}"   @endif
                                                       name="title_ru">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput3" class="form-label">Title
                                                    Arm</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="exampleFormControlInput3"
                                                       @if(isset($editProduct)) value="{{ $editProduct->title_arm }}"   @endif
                                                       name="title_arm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput4" class="form-label">Price </label>
                                                <input type="number"
                                                       class="form-control"
                                                       id="exampleFormControlInput4"
                                                       @if(isset($editProduct)) value="{{ $editProduct->price }}"   @endif
                                                       name="price">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput5"
                                                       class="form-label">Discount</label>
                                                <input type="number"
                                                       class="form-control"
                                                       id="exampleFormControlInput5"
                                                       @if(isset($editProduct)) value="{{ $editProduct->discount }}"   @endif
                                                       name="discount">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput6" class="form-label">Slug</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="exampleFormControlInput6"
                                                       @if(isset($editProduct)) value="{{ $editProduct->slug }}"   @endif
                                                       name="slug">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput7" class="form-label">Slug Ru</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="exampleFormControlInput7"
                                                       @if(isset($editProduct)) value="{{ $editProduct->slug_ru }}"   @endif
                                                       name="slug_ru">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput8" class="form-label">Slug
                                                    Arm</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="exampleFormControlInput8"
                                                       @if(isset($editProduct)) value="{{ $editProduct->slug_arm }}"   @endif
                                                       name="slug_arm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput9" class="form-label">Length </label>
                                                <input type="number"
                                                       class="form-control"
                                                       id="exampleFormControlInput9"
                                                       @if(isset($editProduct)) value="{{ $editProduct->length }}" @else value="0"   @endif
                                                       name="length">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput10" class="form-label">Width</label>
                                                <input type="number"
                                                       class="form-control"
                                                       id="exampleFormControlInput10"
                                                       @if(isset($editProduct)) value="{{ $editProduct->width }}" @else value="0"  @endif
                                                       name="width"
                                                       min="0">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput11" class="form-label">Height</label>
                                                <input type="number"
                                                       class="form-control"
                                                       id="exampleFormControlInput11"
                                                       @if(isset($editProduct)) value="{{ $editProduct->height }}" @else value="0"  @endif
                                                       name="height"
                                                       min="0">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput12"
                                                       class="form-label">kilograms</label>
                                                <input type="number"
                                                       class="form-control"
                                                       id="exampleFormControlInput12"
                                                       name="kilograms"
                                                       @if(isset($editProduct)) value="{{ $editProduct->kilograms }}" @else value="0"  @endif
                                                       min="0">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput13" class="form-label">count</label>
                                                <input type="number"
                                                       class="form-control"
                                                       id="exampleFormControlInput13"
                                                       @if(isset($editProduct)) value="{{ $editProduct->count }}" @else value="1"  @endif
                                                       name="count"
                                                       min="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput14" class="form-label">Category</label>
                                        <select class="form-select"
                                                name="category_id"
                                                @if(isset($editProduct)) value="{{ $editProduct->category_id }}"  @endif
                                                id="exampleFormControlInput14" >
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                    ({{ $category->name_arm }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        @if(isset($editProduct))
                                            <input type="hidden" class="form-control" id="exampleFormControlInput5"
                                                   name="img" value="{{ $editProduct->img }}">
                                        @else
                                            <label for="exampleFormControlInput15" class="form-label">Images</label>
                                            <input type="file" class="form-control" id="exampleFormControlInput15"
                                                   name="img">
                                        @endif
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput16" class="form-label">Description</label>
                                        <textarea class="form-control" id="exampleFormControlInput16"
                                                  name="description">@if(isset($editProduct))  {{ $editProduct->description }}   @endif</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput17" class="form-label">Description Ru</label>
                                        <textarea class="form-control" id="exampleFormControlInput17"
                                                  name="description_ru">@if(isset($editProduct))  {{ $editProduct->description_ru }}   @endif</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput18" class="form-label">Description Arm</label>
                                        <textarea class="form-control" id="exampleFormControlInput18"
                                                  name="description_arm">@if(isset($editProduct))  {{ $editProduct->description_arm }}   @endif</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <button class="w-100 btn btn-lg btn-primary" type="submit">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
