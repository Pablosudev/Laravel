<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingsModel extends Model
{
    protected function $fillable{
        'name',
        'date',
        'check_in',
        'check_out',
        'request',
        'status',
        'room_id'
    }
    public function booking()
    {
        return $this -> belognsTo(RoomsModel::class);
    }
}
