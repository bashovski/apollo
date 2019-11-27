<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidateUserUpdateController extends Controller {

    public function index() {

        $data = request()->all();
        $userData = auth()->user();

        $validation = User::validateUserSettings($data);
        //dd($validation['errors']);
        if($validation['errors'] !== false) {
            return response()->json([
                'success' => false,
                $validation,
                'inserted' => $data
            ]);
        }

        return response()->json([
            'success' => true,
            'inserted' => $data
        ]);
    }
}
