<style>
    .unit-edit span {
        font-size: 19px;
    }
    td > p { overflow-y:scroll;overflow-x:hidden;} 
</style>
<div class="table-responsive pmd-card pmd-z-depth ">
    <table id="table-data" class="table  table-bordered table-striped table-condensed dataTable no-footer">
        <!-- <colgroup>
            <col width="3%">
            <col width="5%">
            <col width="10%">
            <col width="10%">
            <col width="15%">
            <col width="10%">
            <col width="10%">
            <col width="7%">
            <col width="5%">
            <col width="3%">
        </colgroup> -->
        <thead>
            <tr>
                <td align="center"><input type="checkbox" name="chk_all_item_id"
                        onclick="checkbox_all_item_id(document.forms[0].chk_item_id);"></td>
                <td align="center"><b>STT</b></td>
                <td align="center"><b>Thông tin</b></td>
                @if($_SESSION['role'] == 'ADMIN')
                <td align="center"><b>Phê duyệt</b></td>
                @endif
            </tr>
        </thead>
        <tbody id="body_data">
            @if(count($datas) > 0)
                @foreach ($datas as $key => $data)
                @php $id = $data->id; $i = 1; @endphp
                    <tr>
                        <td style="white-space: inherit;vertical-align: middle;" align="center"><input type="checkbox" name="chk_item_id"
                            value="{{ $data->id }}">
                        </td>
                        <td>
                            <span>Mã ống nghiệm: <span style="color: red;">{{ isset($data->code) ? $data->code : '' }}</span></span> <br>
                            <span>Tên bệnh nhân: {{ isset($data->name) ? $data->name : '' }}</span> <br>
                            <span>Năm sinh: {{ isset($data->date_birthday) ? $data->date_birthday : '' }}</span> <br>
                            <span>Số điện thoại: {{ isset($data->phone) ? $data->phone : '' }}</span><br>
                            <span>Địa chỉ: {{ isset($data->address) ? $data->address : '' }}</span><br>
                            <span>Số tiền: {{ !empty($data->money) ? number_format($data->money,0, '', ',') : '' }} VNĐ </span><br>
                            <span>Ngày tạo: {{ isset($data->created_at) ? $data->created_at : '' }}</span> <br>
                            <span>Ngày lấy mẫu<span style="color:black">Lúc </span> {{ isset($data->hour_sampling) ? $data->hour_sampling : '' }} <span style="color:black">Ngày </span>{{Carbon\Carbon::parse($data->date_sampling)->format('d-m-Y')}} Tại {{ isset($data->address) ? $data->address : '' }}</span>
                            <span>CTV chỉ định: {{ isset($data->code_ctv) ? $data->code_ctv : '' }}</span> <br>
                            <span>Trạng thái: {{ $data->status == 1 ? 'Đã xác nhận' : 'Chưa xác nhận' }}</span> <br>
                        </td>
                        @if($_SESSION['role'] == 'ADMIN')
                        <td style="white-space: inherit;vertical-align: middle;" onclick="{select_row(this);}" align="center">
                            <label class="custom-control custom-checkbox p-0 m-0 pointer " style="cursor: pointer;">
                                <input type="checkbox" hidden class="custom-control-input toggle-status" id="status_{{$id}}" data-id="{{$id}}" {{ $data->status == 1 ? 'checked' : '' }}>
                                <span class="custom-control-indicator p-0 m-0" onclick="JS_AppointmentAtHome.changeStatusAppointmentAtHome('{{$id}}')"></span>
                            </label>
                        </td>
                        @endif
                        <td style="width:5% ;white-space: inherit;vertical-align: middle;" align="center"> <br>
                            <button onclick="JS_AppointmentAtHome.showDetail('{{$id}}')" class="btn btn-light"  type="button">
                                <i style="color:#00740a" class="far fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            @if(count($datas) > 0)
            <tr class="fw-bold" id="pagination">
                <td colspan="10">{{$datas->links('pagination.phantrang')}}</td>
            </tr>
            @else
            <tr id="pagination" align="center">
                <td colspan="10">Không tìm thấy dữ liệu!</td>
            </tr>
            @endif
        </tfoot>
    </table>
</div>
