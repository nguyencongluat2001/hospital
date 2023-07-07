<?php

namespace Modules\Client\Page\Facilities\Controllers;

use App\Http\Controllers\Controller;
use Modules\Base\Library;
use Illuminate\Http\Request;
use Modules\Client\Page\Facilities\Services\FacilitiesService;
use Modules\System\Dashboard\Blog\Services\BlogService;
use Modules\System\Dashboard\Category\Services\CategoryService;
use Modules\System\Dashboard\Category\Services\CateService;
use Illuminate\Support\Facades\Http;
use DB;
use Modules\System\Dashboard\Hospital\Services\HospitalService;

/**
 * Phân quyền người dùng 
 *
 * @author Luatnc
 */
class FacilitiesController extends Controller
{

    public function __construct(
        CateService $cateService,
        CategoryService $categoryService,
        FacilitiesService $FacilitiesService,
        BlogService $blogService,
        HospitalService $hospitalService
    ){
        $this->cateService = $cateService;
        $this->categoryService = $categoryService;
        $this->blogService = $blogService;
        $this->FacilitiesService = $FacilitiesService;
        $this->hospitalService = $hospitalService;
    }

    /**
     * khởi tạo dữ liệu, Load các file js, css của đối tượng
     *
     * @return view
     */
    public function index(Request $request)
    {
        $objResult = $this->hospitalService->where('current_status',1)->get()->take(8);
        // foreach($objResult as $key => $value){
        //     $category = $this->categoryService->where('code_category', $value->code_category)->first();
        //     if(!empty($category)){
        //         $objResult[$key]->cate_name = $category->name_category;
        //     }
        // }
        // dd($objResult);
        $datas['datas']= $objResult;
        // $cate = $this->cateService->where('code_cate','DM_BLOG')->first();
        // if(!empty($cate)){
        //     $category = $this->categoryService->select('code_category','name_category')->where('cate',$cate->code_cate)->get()->toArray();
        // }
        // $datas['category'] = isset($category) ? $category : [];
        // $datas = [];
        return view('client.Facilities.home',$datas);
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
        return view("client.Facilities.loadlist", $data)->render();
    }
}
