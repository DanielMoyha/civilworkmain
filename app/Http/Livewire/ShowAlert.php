<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowAlert extends Component
{
    public $message;

    /**
     * Renderiza la vista las alertas
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        return view('livewire.show-alert');
    }
}
