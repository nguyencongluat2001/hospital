<?php

namespace Modules\System\Dashboard\Hospital\Controllers;

use App\Http\Controllers\Controller;
use Modules\Base\Library;
use Illuminate\Http\Request;
use Modules\System\Dashboard\Hospital\Services\HospitalService;
use Modules\System\Dashboard\Category\Services\CategoryService;
use Modules\System\Dashboard\Specialty\Services\SpecialtyService;
use DB;

/**
 * cẩm nang
 *
 * @author Luatnc
 */
class HospitalController extends Controller
{

    public function __construct(
        SpecialtyService $SpecialtyService,
        HospitalService $HospitalService,
        CategoryService $categoryService
    ){
        $this->SpecialtyService = $SpecialtyService;
        $this->HospitalService = $HospitalService;
        $this->categoryService = $categoryService;
    }

    /**
     * khởi tạo dữ liệu
     *
     * @return view
     */
    public function index(Request $request)
    {
        $getCategory = $this->categoryService->where('cate','CNK_001')->get()->toArray();
        $data['category'] = $getCategory;
        return view('dashboard.hospital.index',compact('data'));
    }
    /**
     * load màn hình danh sách
     *
     * @param Request $request
     *
     * @return json $return
     */
    public function loadList(Request $request)
    { 
        $arrInput = $request->input();
        // if($arrInput['cate'] == null || $arrInput['cate'] == ''){
        //     unset($arrInput['cate']);
        // }
        $data = array();
        $param = $arrInput;
        $objResult = $this->HospitalService->filter($param);
        $data['datas'] = $objResult;
        $data['param'] = $param;
        // $data['pagination'] = $data['datas']->links('pagination.default');
        return view("dashboard.hospital.loadlist", $data)->render();
    }
     /**
     * Load màn hình them thông tin
     *
     * @param Request $request
     *
     * @return view
     */
    public function createForm(Request $request)
    {
        $input = $request->all();
        $Specialty = $this->SpecialtyService->where('current_status',1)->get();
        foreach($Specialty as $value){
            $arrSpecialty[] = [
                'code' =>  $value['code'],
                'name' =>  $value['name_specialty'],
                'status' =>  0
            ];
        }
        $data['arrSpecialty_list'] = $arrSpecialty;
        return view('dashboard.hospital.edit',compact('data'));
    }
    /**
     * them thông tin
     *
     * @param Request $request
     *
     * @return view
     */
    public function create (Request $request)
    {
        $input = $request->input();
        $file = isset($_FILES)?$_FILES:'';
        $create = $this->HospitalService->store($input,$file); 
        return array('success' => true, 'message' => 'Cập nhật thành công');
    }
     /**
     * Load màn hình chỉnh sửa thông tin thể loại
     *
     * @param Request $request
     *
     * @return view
     */
    public function edit(Request $request)
    {
        $input = $request->all();
        $data['detail'] = $this->HospitalService->edit($input);
        $Specialty = $this->SpecialtyService->where('current_status',1)->get();
        foreach($Specialty as $value){
            if(in_array($value['code'],$data['detail']['arrSpecialty'])){
                $arrSpecialty[] = [
                    'code' =>  $value['code'],
                    'name' =>  $value['name_specialty'],
                    'status' =>  1
                ];
            }else{
                $arrSpecialty[] = [
                    'code' =>  $value['code'],
                    'name' =>  $value['name_specialty'],
                    'status' =>  0
                ];
            }
        }
        $data['arrSpecialty_list'] = $arrSpecialty;
        return view('dashboard.hospital.edit',compact('data'));
    }

     /**
     * Xóa
     *
     * @param Request $request
     *
     * @return Array
     */
    public function delete(Request $request)
    {
        $input = $request->all();
        $listids = trim($input['listitem'], ",");
        $ids = explode(",", $listids);
        foreach ($ids as $id) {
            if ($id) {
                $this->HospitalService->where('id',$id)->delete();
            }
        }
        return array('success' => true, 'message' => 'Xóa thành công');
    }
     /**
     * Load màn hình xem video trực tuyến
     *
     * @param Request $request
     *
     * @return view
     */
    public function seeVideo(Request $request)
    {
        $input = $request->all();
        $data = $this->HospitalService->where('id',$input['id'])->first();
        return view('dashboard.hospital.video',compact('data'));
    }
}
