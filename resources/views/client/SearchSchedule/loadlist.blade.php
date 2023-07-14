<div class="table-responsive pmd-card pmd-z-depth ">
    <table id="table-data" class="table  table-bordered table-striped table-condensed dataTable no-footer">
        <colgroup>
            <col width="14%">
            <col width="14%">
            <col width="14%">
            <col width="14%">
            <col width="14%">
            <col width="25%">
            <col width="5%">
        </colgroup>
        <thead>
            <tr style="background: #243649;color: #ffa700;">
                <td style="white-space: inherit;vertical-align: middle;" align="center"><b>Mã khám bệnh</b></td>
                <td style="white-space: inherit;vertical-align: middle;" align="center"><b>Tên khách hàng</b></td>
                <td style="white-space: inherit;vertical-align: middle;" align="center"><b>Số điện thoại</b></td>
                <td style="white-space: inherit;vertical-align: middle;" align="center"><b>Số tiền chuyển</b></td>
                <td style="white-space: inherit;vertical-align: middle;" align="center"><b>Loại banking</b></td>
                <td style="white-space: inherit;vertical-align: middle;" align="center"><b>Trạng thái</b></td>
                <td style="white-space: inherit;vertical-align: middle;" align="center"><b>#</b></td>
            </tr>
        </thead>
        <tbody id="body_data">
            @if(count($datas) > 0)
                @foreach ($datas as $key => $data)
                @php $id = $data['id']; $i = 1; @endphp
                    <tr>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data['code_schedule']) ? $data['code_schedule'] : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data['name']) ? $data['name'] : '' }}</td>
                        <td style="wwhite-space: inherit;vertical-align: middle;" align="center">{{ isset($data['phone']) ? $data['phone'] : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data['money']) ? $data['money'] : '' }}</td>
                        <td style="white-space: inherit;vertical-align: middle;" align="center">Ngân hàng</td>
                        @if($data['status'] == 1)
                        <td style="color:#00b406;white-space: inherit;vertical-align: middle;" align="center">Đã xác nhận - Thanh toán thành công</td>
                        @elseif($data['status'] == 0 || $data['status'] == '')
                        <td style="color: #ff6b00;white-space: inherit;vertical-align: middle;" align="center">Chưa xác nhận - chờ admin kiểm tra giao dịch!</td>
                        @else
                        <td style="color: #ff0000;white-space: inherit;vertical-align: middle;" align="center">Không nhận được tiền - nhân viên sẽ liên hệ khách hàng</td>
                        @endif
                        <td style="white-space: inherit;vertical-align: middle;" align="center"><i class="far fa-eye"></i></td>
                    </tr>
                   
                @endforeach
            @endif
           
        </tbody>
    </table>
    @if(empty($datas))
    <center><span style="color:red">Không tìm thấy kết quả tra cứu!</span></center>
    @endif
</div>
