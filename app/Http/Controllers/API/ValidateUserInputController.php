<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ValidateUserInputController extends BaseController {
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];


        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }

    public function index() {

        $requestData = [
            'type' => request('type'),
            'email' => request('email'),
            'password' => request('password')
        ];
        switch($requestData['type']) {
            case 'email': {
                return response()->json([
                    'exists' => (User::where('email', '=', $requestData['email'])->take(1)->get()->count() == 0) ? (0) : (1)
                ]);
                break;
            }
            case 'final': {

                $hashedPass = User::where('email', '=', $requestData['email'])->take(1)->get()[0]->password;
                return response()->json([
                    'correct_pass' => (Hash::check($requestData['password'], $hashedPass)) ? (1) : (0)
                ]);
                break;
            }
        }
        return response()->json(['error' => 'Invalid http request']);
    }
}
