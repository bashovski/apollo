<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
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
            'password_confirmation' => request('password_confirmation'),
            'birthDay' => request('birthDay'),
            'birthMonth' => request('birthMonth'),
            'birthYear' => request('birthYear'),
            'location' => request('location')
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

                // DD-MM-YYYY Format
                $responseData['concatenatedDate'] = $responseData['birthDay'] . '-' . $responseData['birthMonth'] . '-' . $responseData['birthYear'];

                $validation = Validator::make( $responseData, [
                    'birthDay' => ['required', 'numeric'],
                    'birthMonth' => ['required', 'numeric'],
                    'birthYear' => ['required', 'numeric'],
                    'location' => ['required', 'string', 'min:2', 'max:128'],
                    'concatenatedDate' => ['date']
                ]);
                $errors = $validation->errors();

                // Validating if user is 18 or more years old.
                if($errors->count() == 0) {
                    $selectedDate = Carbon::createFromDate($responseData['concatenatedDate']);
                    $now = Carbon::now();

                    if($selectedDate->diffInYears($now) < 18) {
                        $errors = [
                            'yearsEligible' => 'To be eligible to register to Apollo, you need to be at least 18 years old.'
                        ];
                    }
                }
                return response()->json($errors);
            }
        }

        return response()->json(['error' => 'Invalid http request']);
    }
}
