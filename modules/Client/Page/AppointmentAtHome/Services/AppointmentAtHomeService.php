<?php

namespace Modules\Client\Page\AppointmentAtHome\Services;

use Illuminate\Support\Facades\Hash;
use Modules\Base\Service;
use Modules\Client\Page\AppointmentAtHome\Repositories\AppointmentAtHomeRepository;
use Illuminate\Support\Facades\Http;
use Modules\Base\Library;
use Modules\System\Dashboard\BloodTest\Models\PriceTestModel;
use DB;
use Str;


class AppointmentAtHomeService extends Service
{
    public function __construct(
    ){
        parent::__construct();
        $this->baseDis = public_path("export/") . "/";
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
                'code_indications'=> !empty($input['code_indications'])?$input['code_indications']:'',
                'code_doctor'=> !empty($input['code_doctor'])?$input['code_doctor']:'',
                'money'=> !empty($input['money'])?$input['money']:'',
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
                'date_birthday'=> !empty($input['date_birthday'])?$input['date_birthday']:'',
                'created_at' => date("Y/m/d"),
                'update_at' => date("Y/m/d")
                
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
      /**
     * Form show chi tiết lịch khám
     */
    public function showDetail($input)
    {
        $AppointmentAtHome = $this->repository->where('id', $input['id'])->first();
        // dd($AppointmentAtHome);
        $expl = explode(',',$AppointmentAtHome['code_indications']);
        // $type = $this->BloodTestService->where('code',$AppointmentAtHome['type'])->first();
       
        $total = 0;
        $price = PriceTestModel::whereIn('code_blood',$expl)->get()->toArray();
        $totals = number_format($total,0, '', ',');
        $param = [
            'code' => isset($AppointmentAtHome['code'])?$AppointmentAtHome['code']:'', 
            'type' => isset($type['name'])?$type['name']:'', 
            'type_at_home' => isset($AppointmentAtHome['type_at_home'])?$AppointmentAtHome['type_at_home']:'',
            'code_doctor' => isset($AppointmentAtHome['code_doctor'])?$AppointmentAtHome['code_doctor']:'',  
            'code_patient'=> isset($AppointmentAtHome['code_patient'])?$AppointmentAtHome['code_patient']:'', 
            'name' => isset($AppointmentAtHome['name'])?$AppointmentAtHome['name']:'', 
            'phone' => isset($AppointmentAtHome['phone'])?$AppointmentAtHome['phone']:'', 
            'sex' => isset($AppointmentAtHome['sex'])?$AppointmentAtHome['sex']:'', 
            'address' => isset($AppointmentAtHome['address'])?$AppointmentAtHome['address']:'', 
            'money' => $totals, 
            'reason' => isset($AppointmentAtHome['reason'])?$AppointmentAtHome['reason']:'', 
            'date_birthday' => isset($AppointmentAtHome['date_birthday'])?date('d-m-Y',strtotime($AppointmentAtHome['date_birthday'])):'', 
            'date_sampling' => isset($AppointmentAtHome['date_sampling'])?date('d-m-Y',strtotime($AppointmentAtHome['date_sampling'])):'', 
            'hour_sampling' => isset($AppointmentAtHome['hour_sampling'])?$AppointmentAtHome['hour_sampling']:'', 
        ];
        $data['datas'] = $param;
        $data['price'] = $price;
    
        return $data;
    }
     /**
     * Xuất excel
     */
    public function exportExcel($input)
    {
        $path = $this->baseDis;
        $fromDate = date('H:i:s d-m-Y');
        $objPHPExcel = \PhpOffice\PhpSpreadsheet\IOFactory::load(base_path() . "/resources/public/template/TemCXLog.xlsx");
        $objWorksheet_template = $objPHPExcel->getActiveSheet();
        $provinceSheet = $objPHPExcel->setActiveSheetIndex(0);
        $namefile = $input['datas']['code_patient'].'.Xls';

        if($input['datas']['sex'] == 1){
            $gioitinh = 'Nam';
        }elseif($input['datas']['sex'] == 2){
            $gioitinh = 'Nữ';
        }else{
            $gioitinh = 'Khác';
        }
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue("A4", '(Thông tin được xuất lúc '.$fromDate.')');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue("C5", $input['datas']['name']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue("C6", $input['datas']['date_birthday']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue("C7", $gioitinh);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue("C8", $input['datas']['code_patient']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue("C9", $input['datas']['code_doctor']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue("C10", 'Lúc '.$input['datas']['hour_sampling'].' ngày '.$input['datas']['date_sampling']);

        $j = 1;
        $i = 13;
        foreach ($input['price'] as $value) {
            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue("A$i", $j)
                ->setCellValue("B$i", $value['code'])
                ->setCellValue("C$i", $value['name']);
            $i++;
            $j++;
        }
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue("D12", 'Tổng: '.$i.' chỉ số');
        $objWriter = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($objPHPExcel, 'Xls');
        $objWriter->save($path . $namefile);
        return $namefile;
    }
}
