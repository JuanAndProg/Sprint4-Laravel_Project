<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGame extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool //permisos de usuario!
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array //TODO definition and obtention of variables
    {
        return 
           ['TeamA'=> 'required',
            'TeamB'=>'required',
            'status'=>'required',
            'date'(),
            'pointsA',
            'pointsB'
            ];
        
    }
}
