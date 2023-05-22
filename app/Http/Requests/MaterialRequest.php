<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:100', 'min:3'],
            // 'name' => 'required|string|max:100|min:2',
            'quantity' => ['required','numeric','max:99999','min:1'],
            'remarks' => 'nullable',
        ];
    }

    /**
     * Obtiene los mensajes de validación para cada regla que se aplica a la solicitud
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'name.required' => 'Introduzca el nombre del material, por favor',
            'name.string' => 'No introduzca caracteres especiales',
            'name.max' => 'El nombre no debe pasar los 100 caracteres',
            'name.min' => 'Al menos debe escribir 3 caracteres',
            'quantity.required' => 'Digite la cantidad, por favor',
            'quantity.numeric' => 'Solo se admiten números',
            // 'quantity.digits' => 'No debe pasar los 5 dígitos',
            'quantity.max' => 'No debe pasar los 5 dígitos',
            'quantity.min' => 'La cantidad mínima es 1',
        ];
    }
}
