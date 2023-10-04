<?php

namespace Modules\Client\Page\Specialty\Controllers;

use App\Http\Controllers\Controller;
use Modules\Base\Library;
use Illuminate\Http\Request;
use  Modules\System\Dashboard\Specialty\Services\SpecialtyService;
use Modules\System\Dashboard\Hospital\Models\HospitalModel;
use Illuminate\Support\Facades\Http;
use Modules\System\Dashboard\Hospital\Services\SystemClinicsService;
use Modules\System\Dashboard\Hospital\Models\SystemClinicsModel;
use DB;

/**
 * Phân quyền người dùng 
 *
 * @author Luatnc
 */
class SpecialtyController extends Controller
{

    public function __construct(
        SystemClinicsService $SystemClinicsService,
        SpecialtyService $SpecialtyService
        ){
        $this->SystemClinicsService = $SystemClinicsService;
        $this->SpecialtyService = $SpecialtyService;
    }

    /**
     * khởi tạo dữ liệu, Load các file js, css của đối tượng
     *
     * @return view
     */
    public function index(Request $request)
    {
        $objResult = $this->SpecialtyService->where('current_status','1')->get();
        // dd($objResult);s
        $data['datas'] = $objResult;
        // $data['pagination'] = $data['datas']->links('pagination.default');
        return view("client.Specialty.home", $data)->render();
        // return view('client.Specialty.home',$datas);
    }
     /// chi tiết chuyên khoa 
     /**
     *
     * @param Request $request
     *
     * @return view
     */
    public function specialty(Request $request ,$code)
    {
        $input = $request->all();
        $datas['datas'] = $this->SpecialtyService->where('code',$code)->first();
        $datas['hospital'] = SystemClinicsModel::where('specialtys','like','%'.$datas['datas']['name_specialty'].'%')->get();
        // $datas['hospital'] = HospitalModel::where('code_specialty','like','%'.$code.'%')->where('type','PHONG_KHAM')->get()->toArray();
        // dd($datas);
        return view('client.Specialty.Detail.home',$datas);
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
        // $arrInput = $request->input();
        // $data = array();
        // $param = $arrInput;
        // $objResult = $this->hospitalService->filter($param);
        // $data['datas'] = $objResult;
        // $data['param'] = $param;
        // // dd($arrInput,$data);
        // return view("client.Specialty.loadlist", $data)->render();
    }
}
