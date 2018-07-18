<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function questionnarie(){
    	return $this->belongsTo('App\Questionnarie', 'id_question');
    }

    public function survey(){
    	return $this->belongsTo('App\Survey', 'id_question');
    }
}
