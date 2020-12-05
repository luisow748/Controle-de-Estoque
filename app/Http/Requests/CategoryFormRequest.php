<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{

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
            'name' => 'required|min:2',
            'description' => 'required'
            //
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "O campo Nome é obrigatório",
            'description.required' => "O campo Descrição é obrigatório",
            'name.min' => "O campo nome precisa de pelo menos 2 caracteres"
            //
        ];
    }
}
