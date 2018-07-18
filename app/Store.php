<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function survey(){
    	return $this->belongsTo('App\Survey', 'id_store');
    }

    public function user(){
    	return $this->hasOne('App\User', 'id', 'id_user');
    }
}
