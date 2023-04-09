<?php

namespace App\Exports;

use App\Models\Work;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

// class WorksDataExport implements FromCollection
class WorksDataExport implements FromView, ShouldAutoSize
{
    use Exportable;

    private $works;

    /**
     * Crea una nueva instancia del controlador.
     * Inicializa la propiedad `$works` con una lista de todas las obras civiles registradas en el sistema
    */
    public function __construct()
    {
        $this->works = Work::all();
    }

    /**
     * Muestra el listado de obras a ser exportada en Excel
     *
     * @return Illuminate\Contracts\View\View
    */
    public function view() : View
    {
        // dd($this->works);
        return view('admin.works.works-export', [
            'works' => $this->works
        ]);
    }
}
