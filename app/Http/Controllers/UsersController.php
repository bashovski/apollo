<?php

namespace App\Http\Controllers;

use App\User;
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

    public function update() {

        $input = (object) array_filter((array) request()->all());

        $hasErrors = User::validateUserSettings(request()->all());

        if(sizeof($hasErrors) >= 1 && $hasErrors['errors'] === true) {
            return redirect(route('myaccount'));
        }

        $authenticatedUser = auth()->user();

        //dd(auth()->user());

        $dateDelimited = auth()->user()->sanitizeDate($input->dateOfBirth);
        if($dateDelimited['success'] === false) return redirect(route('myaccount'));
        foreach($dateDelimited['delimited'] as $key => $i) {
            $input->$key = (integer) $dateDelimited['delimited'][$key];
        }
        unset($input->dateOfBirth);

        $success = $authenticatedUser->update(
            (array) $input
        );

        return redirect(route('myaccount'));
    }
}
