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
use Modules\System\Dashboard\BloodTest\Services\BloodTestService;
use Modules\System\Dashboard\BloodTest\Models\PriceTestModel;
/**
 * dịch vụ lấy mẫu xet nghiệm , truyền dịch tại nhà
 *
 * @author Luatnc
 */
class AppointmentAtHomeController extends Controller
{

    public function __construct(
        BloodTestService $BloodTestService,
        SpecialtyService $SpecialtyService,
        CateService $cateService,
        CategoryService $categoryService,
        AppointmentAtHomeService $AppointmentAtHomeService,
        BlogService $blogService,
        HospitalService $hospitalService
    ){
        $this->BloodTestService = $BloodTestService;
        $this->SpecialtyService = $SpecialtyService;
        $this->cateService = $cateService;
        $this->categoryService = $categoryService;
        $this->blogService = $blogService;
        $this->AppointmentAtHomeService = $AppointmentAtHomeService;
        $this->hospitalService = $hospitalService;
    }
    /**
     * dat lich
     *
     * @param Request $request
     *
     * @return view
     */
    public function indexApointment(Request $request)
    {
        $input = $request->all();
        $getBloodTest['datas'] = $this->BloodTestService->where('sex',1)->orWhere('sex',2)->get()->toArray();
        return view('client.AppointmentAtHome.homeAppointement',$getBloodTest);
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
        // $data['datas'] = $this->BloodTestService->where('code',$code)->get()->toArray();
        $price = PriceTestModel::where('code_blood',$code)->get()->toArray();
        $total = 0;
        foreach($price as $item){
            $total = $total+= $item['price'];
        }
        $datas['total'] = !empty($total)?number_format($total,0, '', ','):0;
        $datas['code'] = $code;
        $datas['type_xetnghiem'] =  $this->BloodTestService->where('sex',1)->orWhere('sex',2)->get()->toArray();
        return view('client.AppointmentAtHome.home',$datas);
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
        $sendPayment =  $this->AppointmentAtHomeService->sendPayment($input);
        return response()->json([
            'status' => $sendPayment
        ]);
    }
     /**
     * dat lich
     *
     * @param Request $request
     *
     * @return view
     */
    public function tab1(Request $request,$code)
    {
        $input = $request->all();
        $data['datas'] = $this->BloodTestService->where('code',$code)->get()->toArray();
        $price = PriceTestModel::get()->toArray();
        $total = 0;
        foreach($price as $item){
            $arr[] = [
                'id'=> $item['id'],
                'code'=> $item['code'],
                'name'=> $item['name'],
                'price'=> number_format($item['price'],0, '', ','),
            ];
            $total = $total+= $item['price'];
        }
        $data['arr_price'] = $arr;
        $data['total'] = number_format($total,0, '', ',');
        return view('client.AppointmentAtHome.tab1',$data);
    }
}
