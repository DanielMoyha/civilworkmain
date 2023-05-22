<?php

namespace App\Http\Livewire;

use App\Models\Work;
use Livewire\Component;
use Livewire\WithPagination;

class Works extends Component
{
    use WithPagination;

    public $search = '';
    public $table_works;
    protected $listeners = ['deregistering_work', 'enable_work'];

    /**
     * Da de baja una obra civil determinada
     *
     * @param \App\Models\Work  $work
     * @return void
    */
    public function deregistering_work(Work $work) : void
    {
        $value = 0;
        $work->update([
            'status' => $work->status = $value,
            'updated_at' => now()
        ]);
    }

    /**
     * Habilita una obra civil determinada que está en estado de baja
     *
     * @param \App\Models\Work  $work
     * @return void
    */
    public function enable_work(Work $work) : void
    {
        $value = 1;
        $work->update([
            'status' => $work->status = $value,
            'updated_at' => now()
        ]);
    }

    /**
     * Renderiza la vista para el listado y filtrado de todas las obras civiles registradas en el sistema
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        $this->table_works = Work::all();
        $works = Work::search(['name', 'name_contractor', 'user.name', 'city.name', 'status'], $this->search)->paginate(10);
        return view('livewire.works', [
            'works' => $works
        ]);
    }
}
