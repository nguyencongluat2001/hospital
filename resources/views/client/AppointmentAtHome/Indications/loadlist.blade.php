<style>
    .unit-edit span {
        font-size: 19px;
    }
    td > p { overflow-y:scroll;overflow-x:hidden;} 
</style>
{{-- @php
use Modules\System\Recordtype\Helpers\WorkflowHelper;
@endphp --}}
<div class="table-responsive pmd-card pmd-z-depth ">
    <table id="table-data" class="table  table-bordered table-striped table-condensed dataTable no-footer">
          <colgroup>
            <col width="90%">
            <col width="10%">
        </colgroup>
        <thead>
            <tr style="background: #243649;color: #ffa700;">
                <td style="white-space: inherit;vertical-align: middle;" align="center"><b>Thông tin chỉ định</b></td>
                <td style="white-space: inherit;vertical-align: middle;" align="center"><b>Chi tiết</b></td>
            </tr>
        </thead>
        <tbody id="body_data">
                @foreach ($datas as $key => $data)
                @php $id = $data['id']; $i = 1; @endphp
                    <tr>
                        <td style="white-space: inherit;vertical-align: middle;">
                            <!-- <span>Ngày tạo chỉ định: {{ isset($data['created_at']) ? $data['created_at'] : '' }}</span> <br> -->
                            <!-- <span>Mã hệ thống: {{ isset($data['code']) ? $data['code'] : '' }}</span> <br> -->
                            <span>Mã ống nghiệm: <span style="color: red;">{{ isset($data['code_patient']) ? $data['code_patient'] : '' }}</span></span> <br>
                            <span>Tên khách hàng: {{ isset($data['name']) ? $data['name'] : '' }}</span> <br>
                            <span>Ngày sinh: {{ isset($data['date_birthday']) ? $data['date_birthday'] : '' }}</span> <br>
                            <span>Số điện thoại: {{ isset($data['phone']) ? $data['phone'] : '' }}</span><br>
                            <span>Địa chỉ: {{ isset($data['address']) ? $data['address'] : '' }}</span><br>
                            
                            <!-- <span>Trạng thái: @if($data['status'] == 1)
                                <span style="color:#00b406;white-space: inherit;vertical-align: middle;" align="center">Đã xác nhận - Thanh toán thành công</span>
                                @elseif($data['status'] == 0 || $data['status'] == '')
                                <span style="color: #ff6b00;white-space: inherit;vertical-align: middle;" align="center">Chưa xác nhận - chờ admin kiểm tra giao dịch!</span>
                                @else
                                <span style="color: #ff0000;white-space: inherit;vertical-align: middle;" align="center">Không nhận được tiền - nhân viên sẽ liên hệ khách hàng</span>
                                @endif -->
                        <td style="width:5% ;white-space: inherit;vertical-align: middle;" align="center"> <br>
                            <button onclick="JS_listIndications.showDetail('{{$id}}')" class="btn btn-light"  type="button">
                                <i style="color:#00740a" class="far fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                   
                @endforeach
        </tbody>
    </table>
    <tfoot>
        @if(count($datas) > 0)
        <tr class="fw-bold" id="pagination">
            <td colspan="10">{{$datas->links('pagination.phantrang')}}</td>
        </tr>
        @else
        <tr id="pagination">
            <td colspan="10">Không tìm thấy dữ liệu!</td>
        </tr>
        @endif
    </tfoot>
</div>
