<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyStatus extends Model {
    protected $fillable = [
        'name',
        'progress',
        'locale_key'
    ];
}
