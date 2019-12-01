<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller {

    public function index() {
        return response()->json([
            'error' => 'Invalid endpoint provided.',
            'message' => 'Refer to docs: github.com/bashovski/apollo'
        ]);
    }

}
