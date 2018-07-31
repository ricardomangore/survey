<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question as Question;
use App\Questionnarie as Questionnarie;
use App\Survey as Survey;
use App\Store as Store;
use App\User as User;
use Illuminate\Support\Facades\Auth as Auth;

class TestController extends Controller
{
    public function index(){
    	/*foreach(Questionnarie::find(1)->question[0]->all() as $question){
    		echo $question;
    	}*/
    	/*echo Auth::id();
    	echo Auth::user();
    	echo Auth::user()->store->name;*/
    	
        $questionnarie = Questionnarie::find(1);
        $questions = $questionnarie->question[0]->all();
        $questionArray = array();
        foreach($questions as $question){
            $questionArray[$question->id] = 'required';
        }
        print_r($questionArray);
    }
}
