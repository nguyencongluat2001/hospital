<style>
    .unit-edit span {
        font-size: 19px;
    }
    td > p { overflow-y:scroll;overflow-x:hidden;} 
</style>
<?php
use Modules\System\Dashboard\Specialty\Models\SpecialtyModel;
?>
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
                <td align="center"><b>Thông tin đặt lịch</b></td>
                <td align="center"><b>Trạng thái</b></td>
                <td align="center"><b>#</b></td>
            </tr>
        </thead>
        <tbody id="body_data">
            @if(count($datas) > 0)
                @foreach ($datas as $key => $data)
                @php $id = $data->id; $i = 1; @endphp
                    @if($_SESSION['role'] == 'ADMIN')
                    @if($data->status == 1)
                    <tr style="background:#dafcff">
                    @else 
                    <tr>
                    @endif
                        <td style="white-space: inherit;vertical-align: middle;" align="center"><input type="checkbox" name="chk_item_id"
                                value="{{ $data->id }}">
                        </td>
                        <td style="white-space: inherit;vertical-align: middle;">
                            <span>Ngày đặt lịch: {{ isset($data->created_at) ? $data->created_at : '' }}</span> <br>
                            <span>Mã lịch khám: {{ isset($data->code_schedule) ? $data->code_schedule : '' }}</span> <br>
                            <span>Tên khách hàng: {{ isset($data->name) ? $data->name : '' }}</span> <br>
                            <span>Số điện thoại: {{ isset($data->phone) ? $data->phone : '' }}</span><br>
                            <span>Ngày tạo: {{ isset($data->created_at) ? $data->created_at : '' }}</span> <br>
                            <span>Khoa:  
                                @php
                                    $specialty = SpecialtyModel::where('code',$data->code_specialty)->first();
                                @endphp
                                <span style="color: red;font-weight: 600;">{{$specialty['name_specialty']}}</span>
                            </span><br>
                            <span>Số tiền: <span style="color: #3b83c0;font-weight: 600;"> {{ !empty($data['money']) ? number_format($data['money'],0, '', ',') : '' }}</span> VNĐ </span><br>
                            <span>Banking: Chuyển khoản qua ngân hàng </span><br>
                        </td>
                        <td style="white-space: inherit;vertical-align: middle;" onclick="{select_row(this);}" align="center">
                            <label class="custom-control custom-checkbox p-0 m-0 pointer " style="cursor: pointer;">
                                <input type="checkbox" hidden class="custom-control-input toggle-status" id="status_{{$id}}" data-id="{{$id}}" {{ $data->status == 1 ? 'checked' : '' }}>
                                <span class="custom-control-indicator p-0 m-0" onclick="JS_ApprovePayment.changeStatusApprovePayment('{{$id}}')"></span>
                            </label>
                        </td>
                        <td style="color: #ffb600;;white-space: inherit;vertical-align: middle;" align="center" onclick="JS_ApprovePayment.edit('{{$id}}')"><i class="far fa-eye"></i></td>
                    </tr>
                    @endif
                    @if($data->status == 1 && $_SESSION['role'] == 'EMPLOYEE')
                    @if($data->status == 1)
                    <tr style="background:#dafcff">
                    @else 
                    <tr>
                    @endif
                        <td style="white-space: inherit;vertical-align: middle;" align="center"><input type="checkbox" name="chk_item_id"
                                value="{{ $data->id }}">
                        </td>
                        <td style="white-space: inherit;vertical-align: middle;">
                            <span>Ngày đặt lịch: {{ isset($data->created_at) ? $data->created_at : '' }}</span> <br>
                            <span>Mã lịch khám: {{ isset($data->code_schedule) ? $data->code_schedule : '' }}</span> <br>
                            <span>Tên khách hàng: {{ isset($data->name) ? $data->name : '' }}</span> <br>
                            <span>Số điện thoại: {{ isset($data->phone) ? $data->phone : '' }}</span><br>
                            <span>Ngày tạo: {{ isset($data->created_at) ? $data->created_at : '' }}</span> <br>
                            <span>Khoa:  
                                @php
                                    $specialty = SpecialtyModel::where('code',$data->code_specialty)->first();
                                @endphp
                                <span style="color: red;font-weight: 600;">{{$specialty['name_specialty']}}</span>
                            </span><br>
                            <span>Số tiền: <span sty;e="color: #3b83c0;font-weight: 600;"> {{ !empty($data['money']) ? number_format($data['money'],0, '', ',') : '' }}</span> VNĐ </span><br>
                            <span>Banking: Chuyển khoản qua ngân hàng </span><br>
                        </td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ $data->status == 1 ? 'Đã xác nhận' : 'Chưa xác nhân' }}</td>
                        <td style="color: #ffb600;;white-space: inherit;vertical-align: middle;" align="center" onclick="JS_ApprovePayment.edit('{{$id}}')"><i class="far fa-eye"></i></td>
                    </tr>
                    @endif
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
