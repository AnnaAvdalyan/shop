@extends('layouts.admin-app')

@section('admin-content')
{{--    @dd($editCategory);--}}

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="example-alert" style="margin-top: 15px;">
                                            <div class="alert alert-danger alert-icon alert-dismissible">
                                                <em class="icon ni ni-cross-circle"></em> {{ $error }}
                                                <button class="close" data-dismiss="alert"></button>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                @if(Session::has('success'))
                                    <div class="example-alert" style="margin-top: 15px;">
                                        <div class="alert alert-success alert-icon">
                                            <em class="icon ni ni-check-circle"></em> <strong>Thanks for your
                                                deposit</strong>.{{ Session::get('success') }} </div>
                                    </div>
                                    {{--                                        <div class="alert alert-success">--}}
                                    {{--                                            {{ Session::get('successful_message') }}--}}
                                    {{--                                        </div>--}}
                                @endif
                                <h3 class="nk-block-title page-title">   @if(isset($editCategory))
                                        Edit
                                    @else
                                        Добавить
                                    @endif категорию</h3>
                                <form
                                    action="@if(isset($editCategory))  {{ route('categories.update' ,$editCategory) }}    @else {{ route('categories.store') }} @endif"


                                    method="POST">
                                    @csrf
                                    @if(isset($editCategory))
                                        @method('PUT')
                                    @endif

                                    <div class="form-group">
                                        <label class="form-label" for="default-01">
                                            Category</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="default-01"
                                                   placeholder="Category" name="name"
                                                   @if(isset($editCategory)) value="{{ $editCategory->name }}" @endif>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="default-02">
                                            Category Ru</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="default-02"
                                                   placeholder="Category" name="name_ru"
                                                   @if(isset($editCategory)) value="{{ $editCategory->name_ru }}" @endif>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="default-03">
                                            Category Arm</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="default-03"
                                                   placeholder="Category" name="name_arm"
                                                   @if(isset($editCategory)) value="{{ $editCategory->name_arm }}" @endif>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput4" class="form-label">Parent category</label>
                                        <select class="form-select" name="parent_id" id="exampleFormControlInput4">
                                            <option value="-1">-</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                    ({{ $category->name_arm }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        @if(isset($editCategory))
                                            <input type="hidden" class="form-control" id="exampleFormControlInput5"
                                                   value="{{ $editCategory->img }}"
                                                   name="img">
                                        @else:
                                            <label for="exampleFormControlInput5" class="form-label">Images</label>
                                            <input type="file" class="form-control" id="exampleFormControlInput5" name="img">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Add</button>
                                    </div>
                                </form>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                </div>
            </div>
        </div>
    </div>
@endsection
