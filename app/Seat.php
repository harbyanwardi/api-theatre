<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
     protected $table = 'seat';

    

     protected $fillable = [
        'seat_no','status','id_studio'
    ];
}
