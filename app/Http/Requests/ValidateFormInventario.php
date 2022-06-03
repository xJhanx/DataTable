<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ValidateFormInventario extends FormRequest
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
            'modelo' => 'required',
            'placa' => 'required',
            'propietario'=>'required',
            'marca' => 'required',
            'precio' => 'required',
            'imagen' => 'required|image|max:2048'
        ];
    }

    public function messages(){

        return [
            'imagen.required' => 'Seleccione una imagen',
            'modelo.required' => 'Ingrese el modelo',
            'placa.required' => 'Ingrese la placa',
            'propietario.required' => 'Ingrese el propietario',
            'marca.required' => 'Ingrese la marca',
            'precio.required' => 'Ingrese el precio',
            'imagen.image' => 'Solo se permiten imagenes',
        ];
    }
}
