<?php

namespace App\Http\Controllers;

use App\Models\State;

class StateController extends Controller
{
    /**
     * Devuelve una lista de departamentos(state) filtradas por ciudad o municipio.
     *
     * @param int $country_id (opcional) - El ID de la ciudad por el cual filtrar los departamentos. Si no se especifica,
     * se devolverán todas los departamentos.
     *
     * @return \Illuminate\Http\JsonResponse
    */
    public function index()
    {
        $states = State::whereHas('country', function ($query) {
            $query->whereId(request()->input('country_id', 0));
        })->pluck('name', 'id');

        return response()->json($states);
    }
}
