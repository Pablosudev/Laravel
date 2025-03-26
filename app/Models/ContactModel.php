<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ContactModel extends Model
{
    protected $fillable = [
        'date',
        'id',
        'name',
        'email',
        'phone',
        'subject',
        'comment',
        'archived'
    ];  
}
