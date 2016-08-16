<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    
	public function SendData($content = array(), $code = 200) {
        
        $response = [
            'status' => 1,
            'code' => $code,
            'message' => ['success'],
            'data' => $content,
        ];
        return response()->json($response);
    }
	
	public function SendError($error = array()) {
        $response = null;
        if (array_key_exists("code", $error)) {
            $response = [
                'status' => 0,
                'code' => $error['code'],
                'message' => $error['message'],
                'data' => null,
            ];
        } else {
            $response = [
                'status' => 0,
                'code' => 0,
                'message' => $error,
                'data' => null,
            ];
        }
        return response()->json($response);
    }
}
