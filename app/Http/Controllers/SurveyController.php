<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question as Question;

class SurveyController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$questions = Question::all();
    	$questionArray = array();
    	foreach($questions as $question){
          	$questionnarie = $question->questionnarie;
    		$order = $questionnarie[0]->pivot->order;
    		$id = $question->id;
    		$json = json_decode($question->format);
    		$type = $json->type;
    		$questionArray[$order-1] = [
    			'name' => 'question_' . $id,
    			'question' => $question->question,
    			'type' => $type,
    			'options' => ($type=='select')? $json->options:"" 
     		];
    	}
    	return view('survey.survey', ['questions' => $questionArray] );	
    }
}
