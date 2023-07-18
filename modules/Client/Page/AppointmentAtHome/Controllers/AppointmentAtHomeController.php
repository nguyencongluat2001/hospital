<?php

namespace Modules\Client\Page\AppointmentAtHome\Controllers;

use App\Http\Controllers\Controller;
use Modules\Base\Library;
use Illuminate\Http\Request;
use Modules\Client\Page\AppointmentAtHome\Services\AppointmentAtHomeService;
use Modules\System\Dashboard\Blog\Services\BlogService;
use Modules\System\Dashboard\Category\Services\CategoryService;
use Modules\System\Dashboard\Category\Services\CateService;
use Illuminate\Support\Facades\Http;
use DB;
use Modules\System\Dashboard\Hospital\Services\HospitalService;
use Modules\System\Dashboard\Specialty\Models\UnitsModel;
use Modules\System\Dashboard\Specialty\Services\SpecialtyService;
/**
 * Phân quyền người dùng 
 *
 * @author Luatnc
 */
class AppointmentAtHomeController extends Controller
{

    public function __construct(
        SpecialtyService $SpecialtyService,
        CateService $cateService,
        CategoryService $categoryService,
        AppointmentAtHomeService $AppointmentAtHomeService,
        BlogService $blogService,
        HospitalService $hospitalService
    ){
        $this->SpecialtyService = $SpecialtyService;
        $this->cateService = $cateService;
        $this->categoryService = $categoryService;
        $this->blogService = $blogService;
        $this->AppointmentAtHomeService = $AppointmentAtHomeService;
        $this->hospitalService = $hospitalService;
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
        $objResult = $this->hospitalService->filter($param);
        $data['datas'] = $objResult;
        $data['param'] = $param;
        // dd($arrInput,$data);
        return view("client.AppointmentAtHome.loadlist", $data)->render();
    }





    // dịch vụ xét nghiệm, truyền dịch tại nhà
     /**
     *
     * @param Request $request
     *
     * @return view
     */
    public function detailIndex(Request $request ,$code)
    {
        $input = $request->all();
        $datas['datas'] = $this->hospitalService->where('code',$code)->first();
        return view('client.AppointmentAtHome.Detail.home',$datas);
    }
     // dịch vụ xét nghiệm, truyền dịch tại nhà
     /**
     *
     * @param Request $request
     *
     * @return view
     */
    public function index(Request $request ,$code)
    {
        $input = $request->all();
        $datas['type'] = $code;
        $datas['type_xetnghiem'] =  $this->categoryService->where('cate','DM_XET_NGHIEM_TAI_NHA')->get();
        $datas['tinh'] =  UnitsModel::whereNull('code_huyen')->get();
        return view('client.AppointmentAtHome.home',$datas);
    }
     /// Danh sách huyện
     /**
     *
     * @param Request $request
     *
     * @return view
     */
    public function getHuyen(Request $request)
    {
        $input = $request->all();
        $datas['huyen'] =  UnitsModel::where('code_tinh',$input['codeTinh'])->whereNull('code_xa')->select('code_huyen','name')->get()->toArray();
        
        return response()->json([
            'data' => $datas,
            'status' => true
        ]);
    }
     /// Danh sách phường xã
     /**
     *
     * @param Request $request
     *
     * @return view
     */
    public function getXa(Request $request)
    {
        $input = $request->all();
        $datas['xa'] =  UnitsModel::where('code_huyen',$input['codeHuyen'])->select('code_xa','name')->get()->toArray();
        
        return response()->json([
            'data' => $datas,
            'status' => true
        ]);
    }
     /**
     * modal giao dich thanh toan
     *
     * @param Request $request
     *
     * @return view
     */
    public function createForm(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $data['datas'] = $input;
        return view('client.AppointmentAtHome.Schedule.edit',$data);
    }
     /**
     * dat lich
     *
     * @param Request $request
     *
     * @return view
     */
    public function sendPayment(Request $request)
    {
        $input = $request->all();
        $file = $_FILES;
        $sendPayment =  $this->scheduleService->sendPayment($input,$file);
        return response()->json([
            'status' => $sendPayment
        ]);
    }
    
}
