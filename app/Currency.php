<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model {
    protected $fillable = [
        'code',
        'rate'
    ];
}
