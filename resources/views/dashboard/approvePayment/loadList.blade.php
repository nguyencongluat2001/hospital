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
                <td align="center"><b>STT</b></td>
                <td align="center"><b>Thời gian</b></td>
                <td align="center"><b>Mã khám bệnh</b></td>
                <td align="center"><b>Tên khách hàng</b></td>
                <td align="center"><b>Số điện thoại</b></td>
                <td align="center"><b>Khoa</b></td>
                <td align="center"><b>Số tiền</b></td>
                <td align="center"><b>Banking</b></td>
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
                    <tr style="background:#7bffa5">
                    @else 
                    <tr>
                    @endif
                        <td style="white-space: inherit;vertical-align: middle;" align="center"><input type="checkbox" name="chk_item_id"
                                value="{{ $data->id }}"></td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{($datas->currentPage() - 1)*$datas->perPage() + ($key + 1)}}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->created_at) ? $data->created_at : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->code_schedule) ? $data->code_schedule : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->name) ? $data->name : '' }}</td>
                        <td style="wwhite-space: inherit;vertical-align: middle;" align="center">{{ isset($data->phone) ? $data->phone : '' }}</td>
                        <td style="wwhite-space: inherit;vertical-align: middle;" align="center">
                            @php
                            $dataaa = SpecialtyModel::where('code',$data->code_specialty)->first();
                            
                            @endphp
                            {{$dataaa['name_specialty']}}
                        </td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->money) ? number_format($data->money,0, '', ',') : '' }} VNĐ</td>
                        <!-- @if($data->type_payment == 'BANK') -->
                        <td style="color:#00ab5f;white-space: inherit;vertical-align: middle;" align="center">Ngân hàng</td>
                        <!-- @else
                        <td style="color:#ff00c5;white-space: inherit;vertical-align: middle;" align="center">MoMo</td>
                        @endif -->
                        <td style="white-space: inherit;vertical-align: middle;" onclick="{select_row(this);}" align="center">
                            <label class="custom-control custom-checkbox p-0 m-0 pointer " style="cursor: pointer;">
                                <input type="checkbox" hidden class="custom-control-input toggle-status" id="status_{{$id}}" data-id="{{$id}}" {{ $data->status == 1 ? 'checked' : '' }}>
                                <span class="custom-control-indicator p-0 m-0" onclick="JS_ApprovePayment.changeStatusApprovePayment('{{$id}}')"></span>
                            </label>
                        </td>
                        <td style="color: #ffb600;;white-space: inherit;vertical-align: middle;" align="center" onclick="JS_ApprovePayment.edit('{{$id}}')"><i class="far fa-eye"></i></td>
                        <!-- <td style="width:5% ;white-space: inherit;vertical-align: middle;" align="center"><span class="text-cursor text-warning" onclick="JS_ApprovePayment.edit('{{$id}}')"><i class="fas fa-edit"></i></span></td> -->
                    </tr>
                    @endif
                    @if($data->status == 1 && $_SESSION['role'] == 'EMPLOYEE')
                    @if($data->status == 1)
                    <tr style="background:#7bffa5">
                    @else 
                    <tr>
                    @endif
                        <td style="white-space: inherit;vertical-align: middle;" align="center"><input type="checkbox" name="chk_item_id"
                                value="{{ $data->id }}"></td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{($datas->currentPage() - 1)*$datas->perPage() + ($key + 1)}}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->created_at) ? $data->created_at : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->code_schedule) ? $data->code_schedule : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->name) ? $data->name : '' }}</td>
                        <td style="wwhite-space: inherit;vertical-align: middle;" align="center">{{ isset($data->phone) ? $data->phone : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->money) ? $data->money : '' }}</td>
                        <!-- @if($data->type_payment == 'BANK') -->
                        <td style="color:#00ab5f;white-space: inherit;vertical-align: middle;" align="center">Ngân hàng</td>
                        <!-- @else
                        <td style="color:#ff00c5;white-space: inherit;vertical-align: middle;" align="center">MoMo</td>
                        @endif              -->
                                   <!-- <td style="vertical-align: middle;" align="center"><img  src="{{url('/file-image-client/schedule/')}}/{{ !empty($data->name_image)?$data->name_image:'' }}" alt="Image" style="height: 150px;width: 150px;object-fit: cover;"></td> -->
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ $data->status == 1 ? 'Đã xác nhận' : 'Chưa xác nhân' }}</td>
                        <td style="color: #ffb600;white-space: inherit;vertical-align: middle;" align="center" onclick="JS_ApprovePayment.edit('{{$id}}')"><i class="far fa-eye"></i></td>
                        <!-- <td style="width:5% ;white-space: inherit;vertical-align: middle;" align="center"><span class="text-cursor text-warning" onclick="JS_ApprovePayment.edit('{{$id}}')"><i class="fas fa-edit"></i></span></td> -->
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
