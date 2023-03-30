<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Devuelve una lista de ciudades filtradas por departamento (state).
     *
     * @param int $state_id (opcional) El ID del departamento (state) por el cual filtrar las ciudades. Si no se especifica, se devolverán todas las ciudades.
     *
     * @return \Illuminate\Http\JsonResponse
    */
    public function index()
    {
        $cities = City::whereHas('state', function ($query) {
            $query->whereId(request()->input('state_id', 0));
        })->pluck('name', 'id');

        return response()->json($cities);
    }
}
