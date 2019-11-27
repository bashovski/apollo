<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Validator;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'accountType',
        'birthDay',
        'birthMonth',
        'birthYear',
        'location'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function validateUserSettings($data) {
        $validation = Validator::make($data, [
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'location' => ['nullable', 'string', 'min:2', 'max:128'],
            'language' => ['nullable', 'string'],
            'dateOfBirth' => ['nullable', 'string'],
            'accessProfilePermission' => ['nullable', 'string'],
            'postalCode' => ['nullable', 'string']
        ]);
        return [
            "errors" => ($validation->errors()->count() > 0) ? ($validation->getMessageBag()->getMessages()) : (false)
        ];
    }
}
