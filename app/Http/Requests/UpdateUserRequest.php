<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado a realizar esta solicitud
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Obtiene las reglas de validación que se aplican a la solicitud
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           /*  'name' => 'required|string|max:255',
            'username' => ['required','string','max:255', Rule::unique('users')->ignore($this->id)],
            'email' => ['required','string','email','max:255', Rule::unique('users')->ignore($this->id)],
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city_id' => 'required', */
        ];
    }


}
