<div class="table-responsive pmd-card pmd-z-depth ">
    <table id="table-data" class="table  table-bordered table-striped table-condensed dataTable no-footer">
        <colgroup>
            <col width="5%">
            <col width="5%">
            <col width="15%">
            <col width="15%">
            <col width="10%">
            <col width="10%">
            <col width="10%">
            <col width="20%">
            <col width="10%">
        </colgroup>
        <thead>
            <tr>
                <td align="center"><input type="checkbox" name="chk_all_item_id"
                        onclick="checkbox_all_item_id(document.forms[0].chk_item_id);"></td>
                <td align="center"><b>STT</b></td>
                <td align="center"><b>Mã khám bệnh</b></td>
                <td align="center"><b>Tên khách hàng</b></td>
                <td align="center"><b>Số điện thoại</b></td>
                <td align="center"><b>Số tiền chuyển</b></td>
                <td align="center"><b>Loại banking</b></td>
                <td align="center"><b>Ảnh giao dịch</b></td>
                <td align="center"><b>Trạng thái</b></td>
                <!-- <td align="center"><b>#</b></td> -->
            </tr>
        </thead>
        <tbody id="body_data">
            @if(count($datas) > 0)
                @foreach ($datas as $key => $data)
                @php $id = $data->id; $i = 1; @endphp
                    @if(Auth::user()->role == 'ADMIN')
                    <tr>
                        <td style="white-space: inherit;vertical-align: middle;" align="center"><input type="checkbox" name="chk_item_id"
                                value="{{ $data->id }}"></td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{($datas->currentPage() - 1)*$datas->perPage() + ($key + 1)}}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->code_schedule) ? $data->code_schedule : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->name) ? $data->name : '' }}</td>
                        <td style="wwhite-space: inherit;vertical-align: middle;" align="center">{{ isset($data->phone) ? $data->phone : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->money) ? $data->money : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">Ngân hàng</td>
                        <td style="vertical-align: middle;" align="center"><img  src="{{url('/file-image-client/schedule/')}}/{{ !empty($data->name_image)?$data->name_image:'' }}" alt="Image" style="height: 150px;width: 150px;object-fit: cover;"></td>
                        <td style="white-space: inherit;vertical-align: middle;" onclick="{select_row(this);}" align="center">
                            <label class="custom-control custom-checkbox p-0 m-0 pointer " style="cursor: pointer;">
                                <input type="checkbox" hidden class="custom-control-input toggle-status" id="status_{{$id}}" data-id="{{$id}}" {{ $data->status == 1 ? 'checked' : '' }}>
                                <span class="custom-control-indicator p-0 m-0" onclick="JS_ApprovePayment.changeStatusApprovePayment('{{$id}}')"></span>
                            </label>
                        </td>
                        <!-- <td style="width:5% ;white-space: inherit;vertical-align: middle;" align="center"><span class="text-cursor text-warning" onclick="JS_ApprovePayment.edit('{{$id}}')"><i class="fas fa-edit"></i></span></td> -->
                    </tr>
                    @endif
                    @if($data->status == 1 && Auth::user()->role == 'EMPLOYEE')
                    <tr>
                        <td style="white-space: inherit;vertical-align: middle;" align="center"><input type="checkbox" name="chk_item_id"
                                value="{{ $data->id }}"></td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{($datas->currentPage() - 1)*$datas->perPage() + ($key + 1)}}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->code_schedule) ? $data->code_schedule : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->name) ? $data->name : '' }}</td>
                        <td style="wwhite-space: inherit;vertical-align: middle;" align="center">{{ isset($data->phone) ? $data->phone : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->money) ? $data->money : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">Ngân hàng</td>
                        <td style="vertical-align: middle;" align="center"><img  src="{{url('/file-image-client/schedule/')}}/{{ !empty($data->name_image)?$data->name_image:'' }}" alt="Image" style="height: 150px;width: 150px;object-fit: cover;"></td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ $data->status == 1 ? 'Đã xác nhận' : 'Chưa xác nhân' }}</td>

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
