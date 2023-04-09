<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    /**
     * Muestra la vista de índice de servicios para el director general.
     *
     * @return \Illuminate\View\View
    */
    public function index()
    {
        return view('admin.services.index');
    }
}
