<?php

namespace App\Http\Livewire;

use App\Models\Supervision;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class GeneralSupervisions extends Component
{
    use WithPagination;
    public $search = '';
    public $supervisions;

    /**
     * Renderiza la vista para el listado y filtrado general de todas las obras de supervisión para el DIRECTOR GENERAL
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        /* $exists =  Storage::disk('public')->get('followUp/');
        dd($exists); */
        $this->supervisions = Supervision::all();
        $allSupervisions = Supervision::search(['name'], $this->search)->paginate(10);
        return view('livewire.general-supervisions', [
            'allSupervisions' => $allSupervisions
        ]);
    }
}
