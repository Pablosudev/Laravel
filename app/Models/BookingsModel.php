<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingsModel extends Model
{
    protected function $fillable{
        'name',
        'id',
        'date',
        'check_in',
        'check_out',
        'request',
        'status',
        'room_id'
    }
}
