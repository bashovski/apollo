<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller {
    public function show() {
        return view('user.show');
    }
}
