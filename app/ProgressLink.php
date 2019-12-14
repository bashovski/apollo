<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProgressLink extends Model {
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
}
