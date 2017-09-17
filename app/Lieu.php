<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    protected $table = 'lieux';



	public function jardin() {
		return $this->hasOne('App\Jardin','fk_lieux');

	}    
}
