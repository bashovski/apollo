<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiesController extends Controller {
    public function index() {
        return view('index');
    }

    public function create() {
        return view('properties.create');
    }
}
