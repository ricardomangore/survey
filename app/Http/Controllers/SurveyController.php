<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question as Question;
use App\Questionnarie as Questionnarie;
use App\Answer as Answer;
use Illuminate\Support\Facades\Auth as Auth;
use Illuminate\Support\Facades\DB as DB;
use App\Survey as Survey;
use App\Http\Requests\Survey as SurveyRequest;

class SurveyController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function create(){
    	$questionnarie = Questionnarie::find(1);
    	$questions = Questionnarie::find(1)->question[0]->all();//Question::all();
    	$questionArray = array();
    	foreach($questions as $question){
          	$questionnarie = $question->questionnarie;
    		$order = $questionnarie[0]->pivot->order;
    		$json = json_decode($question->format,true);
    		$json['question'] = $question->question;
    		$json['id'] = $question->id;
            $json['order'] = $question->questionnarie[0]->pivot->order; 
    		array_push($questionArray, $json);
    	}
    	//print_r($questionArray);
    	return view('survey.survey', [
    		'questions' => $questionArray,
    		'questionnarie_id' => $questionnarie[0]->id
    	]);	
    }

    public function store(Request $request){
        /*$request->validate([    
            '1' => 'required',
            '2' => 'required',
            '3' => 'required',
            '4' => 'required',
            '5' => 'required',
            '6' => 'required',
            '7' => 'required',
        ]);*/
        print_r($request->all());
        //$request->questionnarieId = 1;
        //$validated = $request->validated();
    	/*$index = $request->input('questionnarie');
    	DB::transaction(function () use($request){
    		$survey = new Survey();
    		$survey->name = "Satisfaction Survey";
    		$survey->date = date("Y-m-d H:i:s");
    		$survey->id_store = Auth::user()->store->id;
    		$survey->save();

    		foreach(Questionnarie::find(1)->question[0]->all() as $question){
    			$answer = new Answer();
    			$answer->id_question = $question->id;
    			$answer->id_store = $survey->id_store;
    			$answer->id_survey = $survey->id;
    			$answer->answer = $request->input("$question->id");
    			$answer->save();
    			//echo $question->id;
                echo $answer;
    		}
    	
    	});*/
    }
 
}
