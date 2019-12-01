<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivateMessage extends Model {
    protected $fillable = [
        'sent_by_id',
        'received_by_id',
        'seen',
        'content',
        'removed',
        'attachment'
    ];
}
