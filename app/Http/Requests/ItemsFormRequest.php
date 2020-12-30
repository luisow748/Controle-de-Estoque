<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemsFormRequest extends FormRequest
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
            // 'description' => 'required',

           // 'qty' => 'required',
            //'minimum_qty' => 'required',
            //'qty' => 'required',
            //'paid_price' => 'required',
            //'new_price' => 'required',
            //'category' => 'required',
            //'subcategory' => 'required',
            //'section' => 'required',
            //'subsection' => 'required'


            //
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "O campo Nome é obrigatório",
            'description.required' => "O campo Descrição é obrigatório",

            //'qty.required' => "O campo Quantidade é obrigatório",
            /*'minimum_qty.required' => "O campo Quantidade Mínima é obrigatório",
            'paid_price.required' => "O campo Preço pago é obrigatório",
            'new_price.required' => "O campo Preço Atualizado é obrigatório",*/
           // 'category.required' => "O campo Categoria é obrigatório",
            /*'subcategory.required' => "O campo Subcategoria é obrigatório",
            'section.required' => "O campo Seção é obrigatório",
            'subsection.required' => "O campo Subseção é obrigatório",*/
            //'required' => 'O campo :attribute é obrigatório', //Regra genérica, pra qualquer campo.
            'name.min' => "O campo nome precisa de pelo menos 2 caracteres"
            //
        ];
    }
}
