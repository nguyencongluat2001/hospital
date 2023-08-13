<?php

namespace Modules\Client\Page\AppointmentAtHome\Services;

use Illuminate\Support\Facades\Hash;
use Modules\Base\Service;
use Modules\Client\Page\AppointmentAtHome\Repositories\AppointmentAtHomeRepository;
use Illuminate\Support\Facades\Http;
use Modules\Base\Library;
use DB;
use Str;

class AppointmentAtHomeService extends Service
{
    public function __construct(
    ){
        parent::__construct();
    }
    public function repository()
    {
        return AppointmentAtHomeRepository::class;
    }
     /**
     * Đặt lịch khám
     *
     * @param Request $request
     *
     * @return view
     */
    public function sendPayment($input)
    {
        DB::beginTransaction();
        try{
            $random = Library::_get_randon_number();
            // $code_schedule = $random.'_'.date("d").'_'.date("m").'_'.date("Y");
            $code = $random.date("d").date("m").date("Y");
            $param = [
                'id' => (string)Str::uuid(),
                'code'=> $code,
                'code_patient'=> !empty($input['code_patient'])?$input['code_patient']:'',
                'name'=> $input['name'],
                'phone'=> !empty($input['phone'])?$input['phone']:'',
                'money'=> !empty($input['money'])?$input['money']:'',
                'type'=> !empty($input['code'])?$input['code']:'',
                'type_at_home'=> !empty($input['type_at_home'])?$input['type_at_home']:'',
                'sex'=> !empty($input['sex'])?$input['sex']:'',
                'date_sampling'=> !empty($input['date_sampling'])?$input['date_sampling']:'',
                'hour_sampling'=> !empty($input['hour_sampling'])?$input['hour_sampling']:'',
                'address'=> !empty($input['address'])?$input['address']:'',
                'reason'=> !empty($input['reason'])?$input['reason']:'',
                'type_payment'=> !empty($input['type_payment'])?$input['type_payment']:'',
                'status'=> 0,
                'created_at' => date("Y/m/d H:i:s"),
                'update_at' => date("Y/m/d H:i:s")
            ];
            if(!empty($_SESSION['role'])){
                $param['code_ctv'] = $_SESSION['code'];
            }
            $create = $this->create($param);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
           return array('success' => false, 'message' => (string) $e->getMessage());
        }
    }
}
