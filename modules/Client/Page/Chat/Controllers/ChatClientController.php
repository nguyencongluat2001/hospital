<?php

namespace Modules\Client\Page\Chat\Controllers;

use App\Events\PusherBroadcast;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\System\Dashboard\CustomerCare\Services\CustomerCareService;

class ChatClientController extends Controller
{
    public function __construct(
        CustomerCareService $customerCareService
    ){
        $this->customerCareService = $customerCareService;
    }
    public function broadcast(Request $request)
    {

        $ipv4 = gethostbyname(trim(exec("hostname")));
        
        $arrInput = $request->all();
        broadcast(new PusherBroadcast($arrInput['phone'], $arrInput['message']))->toOthers();
        if(isset($arrInput['message']) && !empty($arrInput['message'])){
            $html = '<div class="right-message">';
            $html .= '<div class="response">';
            $html .= '<div class="text">';
            $html .= '<p>' . $arrInput['message'] . '</p>';
            $html .= '</div></div></div>';
            
            $params = [
                'id' => strtoupper((string)\Str::uuid()),
                'phone' => $arrInput['phone'],
                'question' => $arrInput['message'],
                'ip' => $ipv4,
                'created_at' => date('Y/m/d H:i:s'),
            ];
            $this->customerCareService->insert($params);

            return $html;
        }
    }

    public function receive(Request $request)
    {
        $arrInput = $request->all();
        if(isset($arrInput['message']) && !empty($arrInput['message'])){
            $html = '';
            $html .= '<div class="left-message">';
            $html .= '<img src="./assets/images/staff-chat.png" alt="" width="50vw" style="margin-right: 5px;">';
            $html .= '<div class="text">';
            $html .= '<p>' . $arrInput['message'] . '</p>';
            $html .= '</div>';
            $html .= '</div>';
            return $html;
        }
    }
    public function showMessage(Request $request)
    {
        $arrInput = $request->all();
        $customerCare = $this->customerCareService->where('phone', $request->phone)->get();
        $htmls = '';
        $htmls .= '<div class="left-message">';
        $htmls .= '<img src="./assets/images/staff-chat.png" alt="" width="50vw" style="margin-right: 5px;">';
        $htmls .= '<div class="text">';
        $htmls .= '<p>Xin chào!<br>Chúng tôi có thể giúp gì cho bạn.</p>';
        $htmls .= '</div></div>';
        $htmls .= '<div class="left-message">';
        $htmls .= '<img src="./assets/images/staff-chat.png" alt="" width="50vw" style="margin-right: 5px;">';
        $htmls .= '<div class="text">';
        $htmls .= '<p><a href="facilities" target="_blank" class="btn btn-light">Đặt lịch khám</a></p>';
        $htmls .= '</div></div>';
        $check = false;
        foreach($customerCare as $key => $value){
            $created_at = Carbon::create($value->created_at);
            $now = Carbon::now();
            if(!empty($value->reply)){
                $htmls .= '<div class="left-message">';
                $htmls .= '<img src="./assets/images/staff-chat.png" alt="" width="50vw" style="margin-right: 5px;">';
                $htmls .= '<div class="text">';
                $htmls .= '<p>' . $value->reply . '</p>';
                $htmls .= '</div></div>';
            }elseif(!empty($value->question)){
                $htmls .= '<div class="right-message">';
                $htmls .= '<div class="response">';
                $htmls .= '<div class="text">';
                $htmls .= '<p>' . $value->question . '</p>';
                $htmls .= '</div>';
                $htmls .= '</div>';
                $htmls .= '</div>';
            }
            if($now->diffInHours($created_at) > 1){
                $check = true;
            }
        }
        return array('htmls' => $htmls, 'check' => $check);
    }
}