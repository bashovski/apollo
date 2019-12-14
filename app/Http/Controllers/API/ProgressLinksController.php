<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\ProgressLink;
use Illuminate\Http\Request;

class ProgressLinksController extends BaseController {
    public function index() {
        return response()->json([
            'success' => true
        ]);
    }

    public function update() {

        $dataObj = json_decode(json_encode(request()->all()));

        if($dataObj->)

        $validation = ProgressLink::validateInput([
            'propertyType' => $dataObj->about->propertyType->current,
            'transactionType' => $dataObj->about->transactionType->current,
            'useProgressLink' => $dataObj->about->useProgressLink->current
        ]);

        return response()->json([
            'success' => $validation['errors'] === false ? true : false,
            'errors' => $validation['errors']
        ]);
    }
}
