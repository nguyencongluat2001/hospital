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
        $getBloodTest['datas'] = $this->BloodTestService->whereIn('code',['PACK1','PACK2','PACK3','PACK4','PACK5','PACK6','PACK7','PACK8','PACK9','PACK10','PACK11','PACK12','PACK13','PACK14','PACK15','PACK16','PACK17','PACK18','PACK19','PACK20','PACK21','PACK22'])->get()->toArray();
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
        $datas['money'] = $total;
        $datas['code'] = $code;
        $datas['count'] = count($price);
        $datas['code_blood'] = $code;
        $datas['type_xetnghiem'] =  $this->BloodTestService->whereIn('code',['PACK1','PACK2','PACK3','PACK4','PACK5','PACK6','PACK7','PACK8','PACK9','PACK10','PACK11','PACK12','PACK13','PACK14','PACK15','PACK16','PACK17','PACK18','PACK19','PACK20','PACK21','PACK22'])->get()->toArray();
        $BloodTest =  $this->BloodTestService->where('sex',1)->orWhere('sex',2)->get()->toArray();
        dd($price,$BloodTest,$total);

        foreach($BloodTest as $val){
            $price = PriceTestModel::where('code',$val['code'])->first();
            if(empty($price) || $price == null ){
                $price = PriceTestModel::where('code_blood',$val['code'])->get()->toArray();
                $total = 0;
                foreach($price as $item){
                    $total = $total+= $item['price'];
                }
            }
            $arr[] = [
                'code'=> $val['code'],
                'name'=> $val['name'],
                'price'=> !empty($price->price)?number_format($price->price): number_format($total)
            ];
        }
        $datas['type_chidinh'] = $arr;
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
        $price = PriceTestModel::where('code_blood',$code)->get()->toArray();
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
       /**
     * dat lich
     *
     * @param Request $request
     *
     * @return view
     */
    public function getPrice(Request $request)
    {
        $input = $request->all();
        $price = PriceTestModel::where('code_blood',$input['code_blood'])->get()->toArray();
        $total = 0;
        foreach($price as $item){
            $total = $total+= $item['price'];
        }
        $datas['total'] = number_format($total,0, '', ',');
        $datas['money'] = $total;
        $datas['count'] = count($price);
        $datas['code_blood'] = $input['code_blood'];
        return response()->json([
            'data' => $datas,
            'status' => true
        ]);
    }
         /**
     * dat lich
     *
     * @param Request $request
     *
     * @return view
     */
    public function showInfor(Request $request)
    {
        $input = $request->all();
        $price = PriceTestModel::where('code_blood',$input['code_blood'])->get()->toArray();
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
        return view('client.AppointmentAtHome.infor',$data);
    }


           /**
     * dat lich
     *
     * @param Request $request
     *
     * @return view
     */
    public function flow(Request $request)
    {
        $input = $request->all();
        if($input['code'] == 'TONG_QUAT'){

        }
        if($input['code'] == 'UNG_THU'){
            $data = [
                '1' => [
                    'code' => 'PACK4',
                    'name' => 'Xét nghiệm ung thư nam giới'
                ],
                '2' => [
                    'code' => 'PACK5',
                    'name' => 'Xét nghiệm ung thư nữ giới'
                ]
                ];
        }
        if($input['code'] == 'SOT_XH'){
            $data = [
                '1' => [
                    'code' => 'PACK6',
                    'name' => 'Xét nghiệm sốt XH'
                ]
                ];
        }
        if($input['code'] == 'CUM'){
            $data = [
                '1' => [
                    'code' => 'PACK7',
                    'name' => 'Xét nghiệm cúm'
                ]
                ];
        }
        if($input['code'] == 'VI_CHAT_TRE_NHO'){
            $data = [
                '1' => [
                    'code' => 'PACK8',
                    'name' => 'Xét nghiệm vi chất trẻ nhỏ'
                ]
                ];
        }
        if($input['code'] == 'GAN'){
            $data = [
                '1' => [
                    'code' => 'PACK9',
                    'name' => 'Xét nghiệm gan'
                ]
                ];
        }
        if($input['code'] == 'TRUYEN_NHIEM'){
            $data = [
                '1' => [
                    'code' => 'PACK10',
                    'name' => 'Xét nghiệm truyền nhiễm'
                ]
                ];
        }
        if($input['code'] == 'NOI_TIETT'){
            $data = [
                '1' => [
                    'code' => 'PACK11',
                    'name' => 'Xét nghiệm nội tiết'
                ]
                ];
        }
        return view('client.AppointmentAtHome.flow',compact('data'));
    }



     /**
     * tổng giá các chỉ số
     *
     * @param Request $request
     *
     * @return view
     */
    public function showPack(Request $request)
    {
        $input = $request->all();
        $arr = [];
        $total = 0;
        if($input['code_indications'] == null){
            $total = 0;
        }else{
            $expl = explode(',',$input['code_indications']);
            foreach($expl as $val){
                $price = PriceTestModel::where('code',$val)->first();
                if(empty($price) || $price == null ){
                    $price = PriceTestModel::where('code_blood',$val)->get()->toArray();
                    foreach($price as $item){
                        $total = $total+= $item['price'];
                    }
                }
                $arr[] = [
                    'code'=> $val,
                    'price'=> !empty($price->price)?number_format($price->price): number_format($total)
                ];
                if(!empty($price->price)){
                    $total = $total+= $price->price;
                }
            }
        }
        $data['chiso'] = $arr;
        $data['total'] = number_format($total,0, '', ',');
        // dd($data);
        return response()->json([
            'data' => $data,
            'status' => true
        ]);
    }










    /// Truyền dịch tại nhà
    /**
     * dat lich
     *
     * @param Request $request
     *
     * @return view
     */
    public function indexInfusion(Request $request)
    {
        $input = $request->all();
        $getBloodTest['datas'] = $this->BloodTestService->where('sex',1)->orWhere('sex',2)->get()->toArray();
        return view('client.AppointmentAtHome.Infusion.InfusionAppointement',$getBloodTest);
    }
     /**
     * dat lich truyền dịch
     *
     * @param Request $request
     *
     * @return view
     */
    public function indexInfusion_form(Request $request ,$code)
    {
        $input = $request->all();
        // $data['datas'] = $this->BloodTestService->where('code',$code)->get()->toArray();
        $price = PriceTestModel::where('code_blood',$code)->get()->toArray();
        $total = 0;
        foreach($price as $item){
            $total = $total+= $item['price'];
        }
        $datas['total'] = !empty($total)?number_format($total,0, '', ','):0;
        $datas['money'] = $total;
        $datas['code'] = $code;
        $datas['count'] = count($price);
        $datas['code_blood'] = $code;
        $datas['type_xetnghiem'] =  $this->BloodTestService->where('sex',1)->orWhere('sex',2)->get()->toArray();
        // dd($datas);
        return view('client.AppointmentAtHome.Infusion.home',$datas);
    }
}
