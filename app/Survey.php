<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    
	public function user(){
		return $this->hasOne('App\User');	
	}
    
}
