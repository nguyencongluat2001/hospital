<?php

namespace Modules\System\Dashboard\AppointmentAtHome\Services;

use Modules\Base\Service;
use Modules\System\Dashboard\AppointmentAtHome\Repositories\AppointmentAtHomeRepository;
use Modules\System\Dashboard\Specialty\Services\SpecialtyService;
class AppointmentAtHomeService extends Service
{
    public function __construct(
        SpecialtyService $specialtyService
    ){
        parent::__construct();
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
        $code_specialty = $this->specialtyService->where('code',$AppointmentAtHome['code_specialty'])->first();
        $data = [
            'code_schedule' => isset($AppointmentAtHome['code_schedule'])?$AppointmentAtHome['code_schedule']:'', 
            'code_hospital' => isset($AppointmentAtHome['code_hospital'])?$AppointmentAtHome['code_hospital']:'', 
            'code_specialty' => isset($code_specialty->name_specialty)?$code_specialty->name_specialty:'', 
            'type_payment' => isset($AppointmentAtHome['type_payment'])?$AppointmentAtHome['type_payment']:'', 
            'money' => isset($AppointmentAtHome['money'])?$AppointmentAtHome['money']:'', 
            'name' => isset($AppointmentAtHome['name'])?$AppointmentAtHome['name']:'', 
            'phone' => isset($AppointmentAtHome['phone'])?$AppointmentAtHome['phone']:'', 
            'code_insurance' => isset($AppointmentAtHome['code_insurance'])?$AppointmentAtHome['code_insurance']:'', 
            'sex' => isset($AppointmentAtHome['sex'])?$AppointmentAtHome['sex']:'', 
            'email' => isset($AppointmentAtHome['email'])?$AppointmentAtHome['email']:'', 
            'date_of_brith' => isset($AppointmentAtHome['date_of_brith'])?$AppointmentAtHome['date_of_brith']:'', 
            'code_tinh' => isset($AppointmentAtHome['code_tinh'])?$AppointmentAtHome['code_tinh']:'', 
            'code_huyen' => isset($AppointmentAtHome['code_huyen'])?$AppointmentAtHome['code_huyen']:'', 
            'code_xa' => isset($AppointmentAtHome['code_xa'])?$AppointmentAtHome['code_xa']:'', 
            'address' => isset($AppointmentAtHome['address'])?$AppointmentAtHome['address']:'', 
            'code_introduce' => isset($AppointmentAtHome['code_introduce'])?$AppointmentAtHome['code_introduce']:'', 
            'reason' => isset($AppointmentAtHome['reason'])?$AppointmentAtHome['reason']:'', 
            'name_image' => isset($AppointmentAtHome['name_image'])?$AppointmentAtHome['name_image']:'', 
            // 'created_at' => isset($AppointmentAtHome['created_at'])?$AppointmentAtHome['created_at']:'', 
            // 'update_at' => isset($AppointmentAtHome['update_at'])?$AppointmentAtHome['update_at']:'', 
        ];
        $data['datas'] = $data;
        return $data;
    }
}