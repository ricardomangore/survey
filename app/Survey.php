<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    public function question(){
    	return $this->hasMany('App\Question', 'id', 'id_question');
    }

    public function store(){
    	return $this->hasMany('App\Store', 'id', 'id_store');
    }
}
