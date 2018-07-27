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
    	//echo $question->questionnarie[0]->pivot;
    	$questionArray = array();
    	foreach($questions as $question){
          	$questionnarie = $question->questionnarie;
    		$order = $questionnarie[0]->pivot->order;
    		$id = $question->id;
    		$questionArray[$order-1] = [
    			'name' => 'question_' . $id,
    			'question' => $question->question 
     		];
    	}
    	print_r($questionArray);
    	
    }
}
