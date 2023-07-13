<?php

namespace Modules\Client\Page\SearchSchedule\Controllers;

use App\Http\Controllers\Controller;
use Modules\Base\Library;
use Illuminate\Http\Request;
use Modules\Client\Page\SearchSchedule\Models\SearchScheduleModel;
use Illuminate\Support\Facades\Http;
use DB;
/**
 * Phân quyền người dùng 
 *
 * @author Luatnc
 */
class SearchScheduleController extends Controller
{

    public function __construct(
    ){
    }

    /**
     * khởi tạo dữ liệu, Load các file js, css của đối tượng
     *
     * @return view
     */
    public function index(Request $request)
    {
        return view('client.SearchSchedule.home');
    }
     /**
     * load màn hình danh sách lấy chỉ số thị trường
     *
     * @param Request $request
     *
     * @return json $return
     */
    public function loadList(Request $request)
    { 
        $arrInput = $request->input();
        $data = array();
        $param = $arrInput;
        $param['search'] = isset($param['search'])?$param['search']:'';
        $objResult = SearchScheduleModel::where('code_schedule',$param['search'])->orWhere('phone',$param['search'])->get()->toArray();
        $data['datas'] = $objResult;
        return view("client.SearchSchedule.loadlist", $data)->render();
    }
}
