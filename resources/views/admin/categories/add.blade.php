@extends('layouts.app-admin')

@section('content')

<div class="col-6">

    <form action="{{ route('addCategoriesCheck') }}"  method="POST" enctype="multipart/form-data" >
        @csrf

        <h1 class="h3 mb-3 fw-normal">Add Category</h1>
        @if($errors->all())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach

        @endif
        @if(Session::has('success'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name"    >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Name Ru</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" name="name_ru"  >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">Name Arm</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" name="name_arm"  >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput4" class="form-label">Parent category</label>
            <select class="form-select" name="parent_id" id="exampleFormControlInput4">
                <option value="-1">-</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}  ({{ $category->name_arm }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput5" class="form-label">Images</label>
            <input type="file" class="form-control" id="exampleFormControlInput5" name="img">
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Add</button>
        <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
    </form>

</div>


@endsection


