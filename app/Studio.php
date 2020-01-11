<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $table = 'studio';

    protected $hidden = [
        'id','created_at', 'updated_at',
    ];

     protected $fillable = [
        'studio_name',
    ];
}
