<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditFollowup extends Component
{
    /**
     * Renderiza la vista para la actualización del seguimiento de una supervisión de obra determinada
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        return view('livewire.edit-followup');
    }
}
