<?php

namespace App\Http\Livewire;

use App\Models\Construction;
use Livewire\Component;
use Livewire\WithPagination;

class GeneralConstructions extends Component
{
    use WithPagination;
    public $search = '';
    public $constructions;

    /**
     * Renderiza la vista para el listado y filtrado de todas las obras de construcción para el DIRECTOR GENERAL
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        $this->constructions = Construction::all();
        $allconstructions = Construction::search(['name', 'materials.name'], $this->search)->paginate(10);
        return view('livewire.general-constructions', [
            'allconstructions' => $allconstructions
        ]);
    }
}
