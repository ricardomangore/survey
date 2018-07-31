<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Survey extends FormRequest
{

    private $questionnarieId;
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

    public function getQuestionnarieId(){
        return $this->questionnarieId;
    }

    public function setQuestionnarieId($questionnarieId){
        $this->questionnarieId = $questionnarieId;
    }
}
