@extends('layouts.admin-app')

@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Projects</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total 95 projects.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>Open</span></a></li>
                                                            <li><a href="#"><span>Closed</span></a></li>
                                                            <li><a href="#"><span>Onhold</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Project</span></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    @if(Session::has('success'))
                        <div class="example-alert mb-2 mt-2"  >
                            <div class="alert alert-success alert-icon">
                                <em class="icon ni ni-check-circle"></em> <strong>Thanks for your
                                    deposit</strong>.{{ Session::get('success') }} </div>
                        </div>
                        {{--                                        <div class="alert alert-success">--}}
                        {{--                                            {{ Session::get('successful_message') }}--}}
                        {{--                                        </div>--}}
                    @endif
                    <div class="nk-block">
                        <div class="row">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        <div class="card-inner p-0">
                                            <table class="nk-tb-list nk-tb-ulist">
                                                <thead>
                                                <tr class="nk-tb-item nk-tb-head">
                                                    <th class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="pid-all">
                                                            <label class="custom-control-label" for="pid-all"></label>
                                                        </div>
                                                    </th>
                                                    <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                                                    <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Title_ru</span></th>
                                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Title__arm</span></th>
                                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Price</span></th>
                                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Discount</span></th>
                                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Size</span></th>
                                                    <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-xs btn-trigger btn-icon dropdown-toggle mr-n1" data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Mark As Done</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-archive"></em><span>Mark As Archive</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Projects</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr><!-- .nk-tb-item -->
                                                </thead>
                                                <tbody>
                                                @foreach($products as $product)

                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="pid-01">
                                                                <label class="custom-control-label" for="pid-01"></label>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <a href="{{ route('products.show', $product) }}" class="project-title">
                                                                <div class="user-avatar   bg-transparent "><img src="{{ asset($product->img) }}" alt=""></div>
                                                                <div class="project-info">
                                                                    <h6 class="title">{{ $product->title }}</h6>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-xxl">
                                                            <span>{{ $product->title_ru }}</span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span> {{ $product->title_arm }}</span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span> {{ $product->price }}</span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span> {{ $product->discount }}</span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span> {{ $product->length }}x{{ $product->height }}x{{ $product->width }} </span>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{ route('products.edit', $product->id) }}"><em class="icon ni ni-edit"></em><span>Редактировать</span></a></li>
                                                                                <li>
                                                                                    <form action="{{  route('products.destroy', $product ) }}" method="post">
                                                                                        @csrf
                                                                                        @method('DELETE')
                                                                                        <button type="submit" class="btn" ><em class="icon ni ni-trash"></em><span>Удалить </span></button>
                                                                                    </form>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table><!-- .nk-tb-list -->
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
                        </div>

                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
