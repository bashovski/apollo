<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPropertiesController extends Controller {
    public function index() {
        return view('user.properties.index');
    }
}
