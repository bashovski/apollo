<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidateUserUpdateController extends Controller {
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

        $data = request()->all();
        $userData = auth()->user();

        $validation = Validator::make($data, [
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'location' => ['nullable', 'string', 'min:2', 'max:128'],
            'language' => ['nullable', 'string'],
            'dateOfBirth' => ['nullable', 'string'],
            'accessProfilePermission' => ['nullable', 'string'],
            'postalCode' => ['nullable', 'string']
        ]);

        return response()->json([
            'errors' => $validation->errors(),
            'inserted' => $data
        ]);
    }
}
