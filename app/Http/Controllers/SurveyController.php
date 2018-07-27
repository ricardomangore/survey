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
    		$json = json_decode($question->format,true);
    		$json['question'] = $question->question;
    		array_push($questionArray, $json);
    	}
    	//print_r($questionArray);
    	return view('survey.survey', ['questions' => $questionArray]);	
    }
}
