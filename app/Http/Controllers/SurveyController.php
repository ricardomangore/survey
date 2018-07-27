<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question as Question;
use App\Questionnarie as Questionnarie;
use App\Answer as Answer;
use Illuminate\Support\Facades\Auth as Auth;
use Illuminate\Support\Facades\DB as DB;
use App\Survey as Survey;

class SurveyController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$questionnarie = Questionnarie::find(1);
    	$questions = Questionnarie::find(1)->question[0]->all();//Question::all();
    	$questionArray = array();
    	foreach($questions as $question){
          	$questionnarie = $question->questionnarie;
    		$order = $questionnarie[0]->pivot->order;
    		$json = json_decode($question->format,true);
    		$json['question'] = $question->question;
    		$json['id'] = $question->id;
    		array_push($questionArray, $json);
    	}
    	//print_r($questionArray);
    	return view('survey.survey', [
    		'questions' => $questionArray,
    		'questionnarie_id' => $questionnarie[0]->id
    	]);	
    }

    public function store(Request $request){
    	$index = $request->input('questionnarie');
    	DB::transaction(function () {
    		$survey = new Survey();
    		$survey->name = "Satisfaction Survey";
    		$survey->date = date("Y-m-d H:i:s");
    		$survey->id_store = Auth::user()->store->id;
    		$survey->save();
    		foreach(Questionnarie::find(1)->question[0]->all() as $question){
    			$answer = new Answer();
    			$answer->id_store = $survey->id_store;
    			$answer->id_survey = $survey->id_survey;
    			$answer->id_survey = $request->input($question->id);
    			$answer->answer = $request->input('value');
    		}
    	});
    }
}
