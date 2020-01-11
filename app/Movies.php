<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{

	protected $table = 'table_movies';
    protected $fillable = [
        'title', 'categories', 'duration',
    ];

    protected $hidden = [
        'id','created_at', 'updated_at',
    ];

    public function schedules(){
	 return $this->hasMany("App\Schedules");
	}

}
