<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Questionnarie as Questionnarie;

class Survey extends FormRequest
{

    public $questionnarieId;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $questionnarieId = 1; //$this->getQuestionnarieId();
        $questionnarie = Questionnarie::find($questionnarieId);
        $questions = $questionnarie->question[0]->all();
        $questionArray = array();
        foreach($questions as $question){
            $questionArray[$question->id] = 'required';
        }
        //return $questionArray;
        return [
            '1' => 'required',
            '2' => 'required',
            '3' => 'required',
            '4' => 'required',
            '5' => 'required',
            '6' => 'required',
            '7' => 'required',
        ];
    }

    public function messages(){
        $questionnarieId = 1;
        $questionnarie = Questionnarie::find($questionnarieId);
        $questions =  $questionnarie->question[0]->all();
        $questionArray = array();
        foreach($questions as $question){
            $questionArray[ $question->id . '.required' ] = 'Este campo es requerido'; 
        }
        return $questionArray;
    }

    public function getQuestionnarieId(){
        return $this->questionnarieId;
    }

    public function setQuestionnarieId($questionnarieId){
        $this->questionnarieId = $questionnarieId;
    }
}
