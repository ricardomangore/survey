<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function questionnarie(){
    	return $this->belongsToMany('App\Questionnarie', 'rel_question_questionnaries', 'id_question', 'id_questionnaries');
    }
}
