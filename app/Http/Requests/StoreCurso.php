<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // VERIFICCAR SI TIENE O NO LOS PERMISOS
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
            //
            'name'=>'required|max:10',
             'description'=>'required|min:10',
             'categoria'=>'required',
        ];
    }
    public function attributes()
    {
        // personalixar el nombre del atributo
        return[
            'name'=> 'nombre del curso'
        ];      
    }
    public function messages()
    {
        return[
            'description.required' => 'debe ingresar una descripción del curso'
        ];
    }
}
