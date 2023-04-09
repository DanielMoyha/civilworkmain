<?php

namespace App\Http\Livewire;

use App\Models\Follow_up;
use App\Models\Supervision;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateFollowup extends Component
{
    public $supervision_id;
    public $description;
    public $date;
    public $image;

    use WithFileUploads;

    protected $rules = [
        'supervision_id' => 'required',
        'description' => 'required|string',
        'date' => 'required',
        'image' => 'required|image|max:1024',
    ];

    /**
     * Se ejecuta al inicializar el componente
     *
     * @param int $supervision_id - El id de la supervisión a utilizar
     * @return void
    */
    public function mount($supervision_id) : void
    {
        $supervision_id = Supervision::find($this->supervision_id);
    }
    /* public function mount($supervision_id)
    {
        $this->supervision_id = Supervision::find($supervision_id);
    } */

    /**
     * Registra una nueva supervisión de obra
     *
     * @return \Illuminate\Http\Redirect
    */
    public function createFollowUp()
    {
        $data = $this->validate();

        // Almacenar la imagen
        $imagen = $this->image->store('public/follow-up');//store() lo va a colocar en alguna ruta (store es de livewire)
        $data['image'] = str_replace('public/follow-up/', '', $imagen);

        Follow_up::create([
            'supervision_id' => $data['supervision_id'],
            'description' => $data['description'],
            'date' => $data['date'],
            'image' => $data['image']
        ]);

        return redirect()->back();
    }

    /**
     * Renderiza la vista para una determinada obra de supervisión
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        return view('livewire.create-followup', [
            'supervision' => Supervision::find($this->supervision_id)
        ]);
    }
}
