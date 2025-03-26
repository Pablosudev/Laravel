<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomsModel extends Model
{
    protected $fillable = [
        'number',
        'price',
        'offer',
        'roomStatus',
        'type',
        'amenities',
    ]
}

public function booking()
{
    return $this -> hasMany(BookingsModel::class);
}