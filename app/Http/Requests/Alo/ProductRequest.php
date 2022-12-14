<?php

namespace App\Http\Requests\Alo;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public $validator = null;

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
       'name' =>'required',
       'price' =>'required',
       'something'=>'required|boolean'
    ];
   }
    protected function failedValidation(Validator $validator)
    {
        $this->validator = $validator;
    }
}
