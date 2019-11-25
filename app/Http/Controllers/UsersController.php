<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller {
    public function show() {
        $user = auth()->user();
        $passedCredentials = [
            'email' => $user->email,
            'location' => $user->location,
            'postalCode' => $user->postalCode,
            'accessProfilePermission' => $user->accessProfilePermission,
            'dateOfBirth' => $user->birthDay . '-' . $user->birthMonth . '-' . $user->birthYear,
            'locale' => $user->locale
        ];
        return view('user.show', compact('passedCredentials'));
    }
}
