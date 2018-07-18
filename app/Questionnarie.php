<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnarie extends Model
{
    public function question(){
    	return $this->hasMany('App\Question', 'id', 'id_question');
    }
}
