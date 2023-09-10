<style>
    form{
        width:100%;
    }
    .hiddel{
        display: none;
    }
    .show{
        display: block;
    }
    .modal-dialog {
        padding-top: 400px;
    }
    a {
    text-decoration: none;
    }
</style>
<form id="frmFlow" role="form" action="" method="POST"  enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" id="id" value="{{!empty($datas->id) ? $datas->id : ''}}">
    <div class="modal-dialog modal-lg">
    <div class="modal-content card">
            <div class="modal-header">
                <h5 class="modal-title" style="font-size:30px;font-family: math;color:#224077">Chọn gói xét nghiệm</h5>
                <!-- <button type="button" class="btn btn-sm" data-bs-dismiss="modal">
                    X
                </button> -->
            </div>
            <div class="modal-body">
                {{-- <table id="myTable" class="table  table-bordered table-striped table-condensed dataTable no-footer">
                    <tbody id="body_data" style="background: #fdffff;">
                            @foreach ($data as $key => $data)
                                <tr>
                                    <td style="white-space: inherit;vertical-align: middle;" >
                                    <span style="color:#254885;font-size:16px">{{ isset($data['name']) ? $data['name'] : '' }}  </span><br>
                                    </td>
                                    <td style="white-space: inherit;vertical-align: middle;" align="center">
                                        <a href="{{url('appointmentathome/')}}/{{$data['code']}}">
                                            <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
                --}}
                @foreach ($data as $key => $data)
                    <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden my-3" style="background:#c6fffe2e">
                    <a href="{{url('appointmentathome/')}}/{{$data['code']}}">
                        <div class="pricing-horizontal-icon col-md-3 text-center bg-warning text-light p-0">
                            <i class="display-6 bx bx-package pt-1" style="color:#affbff"></i>
                            <!-- <h5 class="h6 pb-2">Đặt lịch</h5> -->
                            <a href="{{url('appointmentathome/')}}/{{$data['code']}}">
                                                            <h5 class="h6 pb-1" style="color: #0d1226;">Đặt lịch</h5>
                                        </a>
                           
                        </div>
                        </a>
                        <div class="text-light col-lg-9">
                            <ul class="text-left list-unstyled mb-0" style="color: #596986;font-family: ui-monospace;">
                                <li style="color: #2a2d45;font-family: serif;font-weight: 600;"><h3>{{ isset($data['name']) ? $data['name'] : '' }}</h3></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
                <div class="modal-footer pt-2">
                    <button style="background:#758caa" type="button" data-bs-dismiss="modal">
                        Đóng
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>


