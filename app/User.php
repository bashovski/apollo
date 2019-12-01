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
        'avatar',
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

    /**
     * Enumeration containing possible selections made by user for
     * determining which type of user account has access to preview
     * user's account excluding the user account owner.
     * Default value: 'everyone'
     * @var array
     *
     */
    public static $profileAccessEnum = [
        'everyone',
        'onlyRegistered',
        'onlyAgent',
        'onlyMe'
    ];

    public static function validateUserSettings($data) {
        $validation = Validator::make($data, [
            'avatar' => ['nullable', 'image', 'max:5120'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'location' => ['nullable', 'string', 'min:2', 'max:128'],
            'language' => ['nullable', 'string'],
            'dateOfBirth' => ['nullable', 'string', 'date'],
            'accessProfilePermission' => ['nullable', 'string'],
            'postalCode' => ['nullable', 'string']
        ]);
        return [
            "errors" => ($validation->errors()->count() > 0) ? ($validation->getMessageBag()->getMessages()) : (false)
        ];
    }

    public function convertAccessToEnum($accessString) {
        switch($accessString) {
            case 'Only Registered': return 'onlyRegistered';
            case 'Only real estate agents': return 'onlyAgent';
            case 'Only Me': return 'onlyMe';
            default: return 'everyone';
        }
    }

    public function sanitizeDate($rawDate) {

        $delimited = explode('-', $rawDate);
        if(checkdate($delimited[1], $delimited[0], $delimited[2])) {
            return [
                'success' => true,
                'delimited' => [
                    'birthDay' => $delimited[0],
                    'birthMonth' => $delimited[1],
                    'birthYear' => $delimited[2]
                ]
            ];
        } else return [
            'success' => false
        ];
    }

    public function isValidAccessType($rawAccess) {
        foreach(self::$profileAccessEnum as $enumKey) {
            if($rawAccess === $enumKey) {
                return true;
            }
        }
        return false;
    }
}
