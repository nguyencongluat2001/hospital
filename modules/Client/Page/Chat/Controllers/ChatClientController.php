<?php

namespace Modules\Client\Page\Chat\Controllers;

use App\Events\PusherBroadcast;
use App\Http\Controllers\Controller;
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
            $html .= '<div class="text">';
            $html .= '<p>' . $arrInput['message'] . '</p>';
            $html .= '</div>';
            $html .= '</div>';
            return $html;
        }
    }
}