@extends('layouts.app-admin')

@section('content')
    <form action="{{ route('AddProductCheck') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <h1 class="h3 mb-3 fw-normal">Add Product</h1>
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

        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Title Ru</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" name="title_ru">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Title Arm</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" name="title_arm">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Price </label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="price">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Discount</label>
                            <input type="number" class="form-control" id="exampleFormControlInput2" name="discount">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="slug">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Slug Ru</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" name="slug_ru">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Slug Arm</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" name="slug_arm">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Length </label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="length">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Width</label>
                            <input type="number" class="form-control" id="exampleFormControlInput2" name="width"
                                   min="0">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Height</label>
                            <input type="number" class="form-control" id="exampleFormControlInput3" name="height"
                                   min="0">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">kilograms</label>
                            <input type="number" class="form-control" id="exampleFormControlInput2" name="kilograms"
                                   min="0">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">count</label>
                            <input type="number" class="form-control" id="exampleFormControlInput3" name="count"
                                   min="1">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput4" class="form-label">Category</label>
                    <select class="form-select" name="category_id" id="exampleFormControlInput4">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}  ({{ $category->name_arm }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput5" class="form-label">Images</label>
                    <input type="file" class="form-control" id="exampleFormControlInput5" name="img">
                </div>

            </div>
            <div class="col-6">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlInput1" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Description Ru</label>
                    <textarea class="form-control" id="exampleFormControlInput1" name="description_ru"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Description Arm</label>
                    <textarea class="form-control" id="exampleFormControlInput1" name="description_arm"></textarea>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <button class="w-100 btn btn-lg btn-primary" type="submit">Add</button>
            </div>
        </div>
    </form>

@endsection


