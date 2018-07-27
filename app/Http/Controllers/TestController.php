<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question as Question;
use App\Questionnarie as Questionnarie;
use App\Survey as Survey;
use App\Store as Store;
use App\User as User;

class TestController extends Controller
{
    public function index(){
    	echo Question::all();//->user;
    }
}
