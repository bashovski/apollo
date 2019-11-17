<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidateRegisterController extends BaseController {
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
        $responseData = [
            'type' => request('type'),
            'email' => request('email'),
            'firstName' => request('firstName'),
            'lastName' => request('lastName'),
            'password' => request('password'),
            'password_confirmation' => request('password_confirmation')
        ];
        switch($responseData['type']) {
            case 'email': {
                $account = User::where('email', '=', $responseData['email'])->take(1)->get();
                if($account->count() != 0) {
                    return response()->json([
                        'account_exists' => 1,
                        'email' => $responseData['email'],
                        'firstName' => $responseData['firstName']
                    ]);
                } else {
                    return response()->json([
                        'account_exists' => 0
                    ]);
                }
            }
            case 'password': {
                $validation = Validator::make( $responseData, [
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                ]);
                $errors = $validation->errors();
                return response()->json($errors);
            }
            case 'birthloc': {

            }
        }

        return response()->json(['error' => 'Invalid http request']);
    }
}
