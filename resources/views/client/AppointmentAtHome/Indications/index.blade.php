@extends('client.layouts.index')
@section('body-client')
<br>
<br>
    <div class="banner-wrapper bg-light" >
        <div id="index_banner" class="banner-vertical-center-index">
            <div class="carousel-inner active pt-5" >
                <div class="banner-content col-lg-8 col-10 offset-1 m-lg-auto text-left ">
                    <div class="container-fluid pt-5"style="background: white;">
                        <div class="row"  >
                            <form action="" method="POST" id="frmIndications">
                                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                                <section class="content-wrapper">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="row form-group">
                                            {{-- @if(Auth::user()->role == 'ADMIN' || Auth::user()->role == 'MANAGE' || Auth::user()->role == 'STAFF') --}}
                                                <!-- <div class="col-md-3">
                                                    <button class="btn btn-success shadow-sm" id="btn_add" type="button"data-toggle="tooltip"
                                                        data-original-title="Thêm danh mục"><i class="fas fa-plus"></i></button>
                                                    {{-- <button class="btn btn-warning shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"
                                                        data-original-title="SỬa danh mục"><i class="far fa-edit"></i></button> --}}
                                                    <button class="btn btn-danger shadow-sm" id="btn_delete" type="button"data-toggle="tooltip"
                                                        data-original-title="Xóa danh mục"><i class="fas fa-trash-alt"></i></button>
                                                </div> -->
                                                {{-- @endif --}}
                                                <div class="input-group" style="width:80%;height:10%">
                                                    <input id="search" name="search" type="text" class="form-control" placeholder="Tìm kiếm mã, mã ống nghiệm, tên - sđt khách hàng...">
                                                </div>
                                                <button style="width:60px" id="txt_search" name="txt_search" type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                                            </div>
                                            <!-- Màn hình danh sách -->
                                            <div class="row" id="table-container" style="padding-top:10px"></div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editmodal" role="dialog"></div>
    <div class="modal " id="addmodal" role="dialog"></div>
    <div class="modal " id="addfile" role="dialog"></div>
    <script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_listIndications.js') }}"></script>

    <div id="dialogconfirm"></div>
    <script src='../assets/js/jquery.js'></script>
    <script type="text/javascript">
        var baseUrl = '{{ url('') }}';
        var JS_listIndications = new JS_listIndications(baseUrl, 'client', 'appointmentathome');
        jQuery(document).ready(function($) {
            JS_listIndications.loadIndex(baseUrl);
        })
    </script>
@endsection
