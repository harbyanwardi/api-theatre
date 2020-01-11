<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
     protected $table = 'seat';

    protected $hidden = [
        'id','created_at', 'updated_at',
    ];

     protected $fillable = [
        'seat_no','status','id_studio'
    ];
}
