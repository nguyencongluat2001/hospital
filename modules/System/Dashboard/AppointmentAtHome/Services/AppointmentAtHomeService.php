<?php

namespace Modules\System\Dashboard\AppointmentAtHome\Services;

use Modules\Base\Service;
use Modules\System\Dashboard\AppointmentAtHome\Repositories\AppointmentAtHomeRepository;
use Modules\System\Dashboard\Specialty\Services\SpecialtyService;
use Modules\System\Dashboard\Category\Services\CategoryService;

class AppointmentAtHomeService extends Service
{
    public function __construct(
        CategoryService $categoryService,
        SpecialtyService $specialtyService
    ){
        parent::__construct();
        $this->categoryService = $categoryService;
        $this->specialtyService = $specialtyService;
    }
    public function repository()
    {
        return AppointmentAtHomeRepository::class;
    }
    /**
     * Cập nhật thứ tự
     */
    public function updateOrder($input)
    {
        $query = $this->repository->select('*')->where('order', '>=', $input['order'])->orderBy('order');
        if(isset($input['id'])){
            $query = $query->where('id', '<>', $input['id']);
        }
        $order = $query->get();
        if(!empty($order)){
            $i = $input['order'];
            foreach($order as $value){
                $i++;
                $this->repository->where('id', $value->id)->update(['order' => $i]);
            }

        }
    }
      /**
     * Form show chi tiết lịch khám
     */
    public function edit($input)
    {
        $AppointmentAtHome = $this->repository->where('id', $input['id'])->first();
        $cate = $this->categoryService->where('cate','DM_XET_NGHIEM_TAI_NHA')->where('code_category',$AppointmentAtHome['type'])->first();
        $param = [
            'code' => isset($AppointmentAtHome['code'])?$AppointmentAtHome['code']:'', 
            'type' => isset($cate['name_category'])?$cate['name_category']:'', 
            'name' => isset($AppointmentAtHome['name'])?$AppointmentAtHome['name']:'', 
            'phone' => isset($AppointmentAtHome['phone'])?$AppointmentAtHome['phone']:'', 
            'sex' => isset($AppointmentAtHome['sex'])?$AppointmentAtHome['sex']:'', 
            'address' => isset($AppointmentAtHome['address'])?$AppointmentAtHome['address']:'', 
            'reason' => isset($AppointmentAtHome['reason'])?$AppointmentAtHome['reason']:'', 
            'date_sampling' => isset($AppointmentAtHome['date_sampling'])?date('d-m-Y',strtotime($AppointmentAtHome['date_sampling'])):'', 
            'hour_sampling' => isset($AppointmentAtHome['hour_sampling'])?$AppointmentAtHome['hour_sampling']:'', 
        ];
        $data['datas'] = $param;
        return $data;
    }
}