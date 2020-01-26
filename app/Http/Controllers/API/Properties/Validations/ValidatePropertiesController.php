<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidatePropertiesController extends Controller {
    public function index() {
        $data = request()->all();
    }
}
