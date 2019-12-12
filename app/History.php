<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model {
    protected $fillable = [
        'name',
        'user_id',
        'optional_user_id',
        'new_value',
        'old_value',
        'locale_key'
    ];
}
