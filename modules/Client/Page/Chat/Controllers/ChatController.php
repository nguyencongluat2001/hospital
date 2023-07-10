<?php

namespace Modules\Client\Page\Chat\Controllers;

use App\Events\PusherBroadcast;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        
    }
    public function broadcast(Request $request)
    {
        broadcast(new PusherBroadcast('0366178611', $request->get('message')))->toOthers();
        $arrInput = $request->all();
        if(isset($arrInput['message']) && !empty($arrInput['message'])){
            $html = '<div class="right-message">';
            $html .= '<div class="response">';
            $html .= '<div class="text">';
            $html .= '<p>' . $request->get('message') . '</p>';
            $html .= '</div></div></div>';
            return $html;
        }
    }

    public function receive(Request $request)
    {
        return view('receive', ['message' => $request->get('message')]);
    }
}