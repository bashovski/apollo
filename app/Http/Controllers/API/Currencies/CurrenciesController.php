<?php

namespace App\Http\Controllers\API\Currencies;

use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Http\Request;

class CurrenciesController extends Controller {
    public function index() {
        $currencies = '';
        return response()->json($currencies);
    }

    public function show(string $currency) {

    }
}
