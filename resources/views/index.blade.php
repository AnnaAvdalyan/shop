@extends('layouts.master')
@section('content')
    <div class="row">
        @foreach($products as $product)
{{--            @dd('test')--}}
            @include('layouts.card', compact('product'))
        @endforeach
    </div>
@endsection
