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
 * dịch vụ lấy mẫu xet nghiệm , truyền dịch tại nhà
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
     * dat lich
     *
     * @param Request $request
     *
     * @return view
     */
    public function indexApointment(Request $request)
    {
        $input = $request->all();
        return view('client.AppointmentAtHome.homeAppointement');
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
    public function tab1(Request $request)
    {
        $input = $request->all();
        return view('client.AppointmentAtHome.tab1');
    }
}
