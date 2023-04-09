<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
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
            'name' => 'required|string|max:150|no_html',
            'user_id' => 'required|min:1',
            'city_id' => 'required',
            'type_work_id' => 'required',
            'name_contractor' => 'required|string|max:50|no_html',
            'address_contractor' => 'required|string|max:70|no_html',
            'work_duration' => 'required|numeric|max:255|no_html',
            'start_date' => 'required',
            'completion_date' => 'nullable',
            'value_approximate_services' => 'required|numeric|no_html',
            'description' => 'required|no_html',
            'work.services.*.*' => 'required'
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
            'name.required' => 'Introduzca el nombre de la obra',
            'name.no_html' => 'Entrada inválida',
            'user_id.required' => 'Elija un encargado',
            'city_id.required' => 'Elija la ciudad',
            'type_work_id.required' => 'Elija el tipo de obra',
            'name_contractor.required' => 'Introduzca el nombre del contratante',
            'name_contractor.no_html' => 'Entrada inválida',
            'address_contractor.required' => 'Introduzca la dirección del contratante',
            'address_contractor.no_html' => 'Entrada inválida',
            'work_duration.required' => 'Digite la duración del trabajo en meses',
            'work_duration.numeric' => 'Solo se admiten números',
            'work_duration.no_html' => 'Entrada inválida',
            'start_date.required' => 'Elija la fecha de inicio',
            // 'completion_date' => '',
            'value_approximate_services.required' => 'Digite el monto total de los servicios',
            'value_approximate_services.numeric' => 'Solo se admiten números',
            'value_approximate_services.no_html' => 'Entrada inválida',
            'description' => 'Debe describir brevemente la obra',
            'description.no_html' => 'Entrada inválida',
            'services.*.*.required' => 'Elija los servicios'
        ];
    }
}
