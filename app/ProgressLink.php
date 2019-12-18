<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProgressLink extends Model {

    protected $fillable = [
        'key', 'property_id', 'expired', 'expired_at'
    ];

    public static function validateInput($data) {
        $validation = Validator::make($data, [
            'propertyType' => [
                'required', Rule::in([
                    'House',
                    'Office',
                    'Business'
                ])
            ],
            'transactionType' => [
                'required', Rule::in([
                    'Sell',
                    'Rent'
                ])
            ],
            'useProgressLink' => ['required', 'boolean']
        ]);
        return [
            "errors" => ($validation->errors()->count() > 0) ? ($validation->getMessageBag()->getMessages()) : (false)
        ];
    }

    public static function createNewProgressLink(Property $property) {
        return self::create([
            'key' => self::generateProgressLinkKey(),
            'property_id' => $property->id
        ]);
    }

    public static function generateProgressLinkKey() {
        $timestamp = Carbon::now()->timestamp;
        return (Str::random(4) . $timestamp%2 . Str::random(4) .
            substr($timestamp, strlen($timestamp)-4, strlen($timestamp)) .
            Str::random(20));

    }

    public static function validateProgressLink($dataObj) {
        return ProgressLink::validateInput([
            'propertyType' => $dataObj->about->propertyType->current,
            'transactionType' => $dataObj->about->transactionType->current,
            'useProgressLink' => $dataObj->about->useProgressLink->current
        ]);
    }

    public static function returnValidationErrorsResponse($validation) {
        if($validation['errors'] !== false) {
            return response()->json([
                'success' => false,
                'errors' => $validation['errors']
            ]);
        }
    }
}
