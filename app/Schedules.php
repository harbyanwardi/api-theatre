<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    public function movies(){
	 return $this->belongsTo("App\Movies");
	}

	 protected $hidden = [
       'created_at', 'updated_at'
    ];

    protected $fillable = [
        'date','start_time','end_time','id_film',
    ];
}
