<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagStoreRequest extends FormRequest
{
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
           /* 'rut' => 'required|unique:medics,rut',
            'Nombre' => 'required',
            'especialidad' => 'required',
            'fecha_contrato' => 'required',
            'valor_consulta' => 'required',*/
        ];
    }
}
