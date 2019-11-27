<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidateUserUpdateController extends Controller {

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

        if($validation->errors()->count() != 0) {
            return response()->json([
                'success' => false,
                'errors' => $validation->errors(),
                'inserted' => $data
            ]);
        }
        return response()->json([
            'success' => true
        ]);
    }
}
