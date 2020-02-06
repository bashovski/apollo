<?php

namespace App\Http\Controllers\API\ProgressLinks;

use App\Http\Controllers\API\BaseController;
use App\Http\Controllers\Controller;
use App\ProgressLink;
use App\Property;
use Illuminate\Http\Request;

class ProgressLinksController extends BaseController {
    public function index() {
        return response()->json([
            'success' => true
        ]);
    }

    public function show() {

    }

    public function update() {

        $dataObj = json_decode(json_encode(request()->all()));

        if(!$dataObj->about->useProgressLink->current) return response()->json([
            'success' => false,
            'errors' => 'didn\'t choose useProgressLink'
        ]);

        $validation = ProgressLink::validateProgressLink($dataObj);
        ProgressLink::returnValidationErrorsResponse($validation);

        return response()->json([
            'success' => $validation['errors'] === false ? true : false,
            'errors' => $validation['errors']
        ]);
    }

    public function store() {

        $dataObj = json_decode(json_encode(request()->all()));

        if(!$dataObj->about->useProgressLink->current) return response()->json([
            'success' => false,
            'errors' => 'didn\'t choose useProgressLink'
        ]);

        $validation = ProgressLink::validateProgressLink($dataObj);
        ProgressLink::returnValidationErrorsResponse($validation);

        $property = Property::createNewProperty([
            'propertyType' => $dataObj->about->propertyType->current,
            'transactionType' => $dataObj->about->transactionType->current,
            'useProgressLink' => $dataObj->about->useProgressLink->current
        ]);

        $progressLink = ProgressLink::createNewProgressLink($property);

        return response()->json([
            'success' => true,
            'message' => 'store endpoint hit',
            'progress_link' => $progressLink->key
        ]);
    }
}
