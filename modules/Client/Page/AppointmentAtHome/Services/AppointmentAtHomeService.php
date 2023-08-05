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
                'name'=> $input['name'],
                'phone'=> $input['phone'],
                'money'=> $input['money'],
                'type'=> $input['code'],
                'sex'=> $input['sex'],
                'date_sampling'=> $input['date_sampling'],
                'hour_sampling'=> $input['hour_sampling'],
                'address'=> $input['address'],
                'reason'=> $input['reason'],
                'status'=> 0,
                'created_at' => date("Y/m/d H:i:s"),
                'update_at' => date("Y/m/d H:i:s")
            ];
            $create = $this->create($param);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
           return array('success' => false, 'message' => (string) $e->getMessage());
        }
    }
}
