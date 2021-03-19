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
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                       data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#"
                                                       class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                       data-toggle="dropdown"><em
                                                            class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em
                                                            class="dd-indc icon ni ni-chevron-right"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>Open</span></a></li>
                                                            <li><a href="#"><span>Closed</span></a></li>
                                                            <li><a href="#"><span>Onhold</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em
                                                        class="icon ni ni-plus"></em><span>Add Project</span></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <section>


                        <form action="" method="POST" enctype="multipart/form-data" id="gallery">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <div class="preview-zone hidden">
                                                <div class="box box-solid">
{{--                                                    <div class="box-header with-border">--}}
{{--                                                        <div><b>Preview</b></div>--}}
{{--                                                        <div class="box-tools pull-right">--}}
{{--                                                            <button type="button"--}}
{{--                                                                    class="btn btn-danger btn-xs remove-preview">--}}
{{--                                                                <i class="fa fa-times"></i> Reset This Form--}}
{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                    <div class="box-body"></div>
                                                </div>
                                            </div>

                                            <label class="control-label">Upload File</label>
                                            <div class="drop-zone">
                                                <span class="drop-zone__prompt">Drop file here or click to upload</span>
                                                <input type="file" name="myFile" class="drop-zone__input">
                                            </div>
                                        </div>
                                    </div>
                                </div>

{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <button type="submit" class="btn btn-primary pull-right">Upload</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </form>
                        <div class="allGellery row">
                            @foreach($galleries as $gallery)
                                <div class="col-3">
                                    <img src="{{ asset($gallery->img) }}" alt="">

                                <form action="{{  route('galleries.destroy', $gallery ) }}" method="post" class="deleteGallery">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary" ><em class="icon ni ni-trash"></em><span>Удалить </span></button>
                                </form>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

@endsection
