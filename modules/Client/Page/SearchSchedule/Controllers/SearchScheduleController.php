<?php

namespace Modules\Client\Page\SearchSchedule\Controllers;

use App\Http\Controllers\Controller;
use Modules\Base\Library;
use Illuminate\Http\Request;
use Modules\Client\Page\SearchSchedule\Models\SearchScheduleModel;
use Modules\Client\Page\AppointmentAtHome\Models\AppointmentAtHomeModel;
use Illuminate\Support\Facades\Http;
use Modules\System\Dashboard\Category\Services\CategoryService;
use Modules\System\Dashboard\Hospital\Services\HospitalService;
use Modules\System\Dashboard\Specialty\Services\SpecialtyService;
use DB;
/** 
 *
 * @author Luatnc
 */
class SearchScheduleController extends Controller
{

    public function __construct(
        SpecialtyService $specialtyService,
        HospitalService $hospitalService,
        CategoryService $categoryService
    ){
        $this->specialtyService = $specialtyService;
        $this->hospitalService = $hospitalService;
        $this->categoryService = $categoryService;
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
        foreach($objResult as $value){
           $getHospital = $this->hospitalService->where('code',$value['code_hospital'])->first();
           $getSpecialty = $this->specialtyService->where('code',$value['code_specialty'])->first();
            $param_a[] = [
                'id' => $value['id'],
                'code_schedule' => $value['code_schedule'],
                'code_hospital' =>  $getHospital->name_hospital,
                'code_specialty' => $getSpecialty->name_specialty,
                'type_payment' => $value['type_payment'],
                'money' => $value['money'],
                'name' => $value['name'],
                'phone' => $value['phone'],
                'code_insurance' => $value['code_insurance'],
                'sex' => $value['sex'],
                'email' => $value['email'],
                'date_of_brith' => date('d-m-Y',strtotime($value['date_of_brith'])),
                'code_tinh' => $value['code_tinh'],
                'code_huyen' => $value['code_huyen'],
                'code_xa' => $value['code_xa'],
                'address' => $value['address'],
                'reason' => $value['reason'],
                'name_image' => $value['name_image'],
                'status' => $value['status']
            ];
        }
        $data['datas'] = $param_a;

        $dataAtHome = AppointmentAtHomeModel::where('code',$param['search'])->orWhere('phone',$param['search'])->get()->toArray();
        foreach($dataAtHome as $value){
            $cate = $this->categoryService->where('cate','DM_XET_NGHIEM_TAI_NHA')->where('code_category',$value['type'])->first();
            $param_s[] = [
                'id' => $value['id'],
                'code' => $value['code'],
                'name' => $value['name'],
                'phone' => $value['phone'],
                'type' => $cate['name_category'],
                'sex' => $value['sex'],
                'date_sampling' => date('d-m-Y',strtotime($value['date_sampling'])),
                'hour_sampling' => $value['hour_sampling'],
                'address' => $value['address'],
                'reason' => $value['reason'],
                'status' => $value['status']
            ];
        }
        $data['datas_athome'] = $param_s;
        return view("client.SearchSchedule.loadlist", $data)->render();
    }
}
