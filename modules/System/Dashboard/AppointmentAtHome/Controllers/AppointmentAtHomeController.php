<?php

namespace Modules\System\Dashboard\AppointmentAtHome\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\System\Dashboard\AppointmentAtHome\Services\AppointmentAtHomeService;
use Modules\System\Dashboard\Category\Services\CategoryService;
use Modules\System\Dashboard\Users\Services\UserService;

class AppointmentAtHomeController extends Controller
{
    public function __construct(
        AppointmentAtHomeService $AppointmentAtHomeService,
        CategoryService $categoryService,
        UserService $userService
    ){
        $this->AppointmentAtHomeService = $AppointmentAtHomeService;
        $this->categoryService = $categoryService;
        $this->userService = $userService;
    }
    /**
     * Trang đích
     */
    public function index(Request $request)
    {
        return view('dashboard.AppointmentAtHome.index');
    }
    /**
     * Danh sách
     */
    public function loadList(Request $request)
    {
        $update = $this->AppointmentAtHomeService->where('code','66068219082023	')->update(['money'=> 275000]);
        $update = $this->AppointmentAtHomeService->where('code','37420019082023	')->update(['money'=> 680000]);
        $update = $this->AppointmentAtHomeService->where('code','59373719082023	')->update(['money'=> 150000]);
        $update = $this->AppointmentAtHomeService->where('code','88537319082023	')->update(['money'=> 160000]);
        $update = $this->AppointmentAtHomeService->where('code','20721217082023	')->update(['money'=> 735000]);
        dd('ok');
        $input = $request->input();
        $data = array();
        $input['sort'] = 'created_at';
        $objResult = $this->AppointmentAtHomeService->filter($input);
        $data['datas'] = $objResult;
        return view('dashboard.AppointmentAtHome.loadList', $data)->render();
    }
    /**
     * Form thêm
     */
    public function create(Request $request)
    {
        $data['roles'] = $this->categoryService->where('cate', 'DM_VIP')->orderBy('order')->get();
        $data['order'] = $this->AppointmentAtHomeService->select('id')->count() + 1;
        return view('dashboard.AppointmentAtHome.add', $data);
    }
    /**
     * Form sửa
     */
    public function edit(Request $request)
    {
        $input = $request->all();
        $data = $this->AppointmentAtHomeService->edit($input); 
        // dd($data);
        return view('dashboard.AppointmentAtHome.add', $data);
    }
    /**
     * Thêm hoặc Cập nhật
     */
    public function update(Request $request)
    {
        $input = $request->input();
        $create = $this->AppointmentAtHomeService->store($input); 
        return $create;
    }
    /**
     * Xoá
     */
    public function delete(Request $request)
    {
        if($_SESSION['role'] != 'ADMIN'){
            return array('success' => false, 'message' => 'Bạn không có quyền xóa!');
        }
        $input = $request->input();
        $arrId = explode(',', $input['listitem']);
        foreach($arrId as $id){
            $this->AppointmentAtHomeService->where('id', $id)->delete();
        }
        return array('success' => true, 'message' => 'Xóa thành công!');
    }
    /**
     * Cập nhật thông tin màn hình index
     */
    public function updateAppointmentAtHome(Request $request)
    {
        $input = $request->all();
        $data = $this->AppointmentAtHomeService->_updateAppointmentAtHome($input, $input['id']);
        return $data;
    }
    /**
     * Cập nhật trạng thái
     */
    public function changeStatusAppointmentAtHome(Request $request)
    {
        $input = $request->all();
        $list = $this->AppointmentAtHomeService->where('id', $input['id']);
        if(!empty($list->first())){ 
            $list->update(['status' => $input['status']]);
            return array('success' => true, 'message' => 'Cập nhật thành công!');
        }else{
            return array('success' => false, 'message' => 'Không tìm thấy dữ liệu!');
        }
    }
}