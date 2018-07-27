<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnarie extends Model
{
    public function question(){
    	return $this->belongsToMany('App\Question', 'rel_question_questionnaries', 'id_question', 'id_questionnarie')->withPivot('order');
    }
}
