<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question as Question;
use App\Questionnarie as Questionnarie;
use App\Survey as Survey;
use App\Store as Store;

class TestController extends Controller
{
    public function index(){
    	dd(Store::find(4));
    }
}
