<?php

namespace App\Http\Livewire;

use App\Models\Control;
use App\Models\Supervision;
use Livewire\Component;

class CreateTask extends Component
{
    public $description;
    public $supervision_id;
    public $a;

    protected $rules = [
        'description' => 'required|max:100|string'
    ];

    /**
     * Se ejecuta al inicializar el componente
     *
     * @param int $supervision_id - El id de la supervisión a utilizar
     * @return void
    */
    public function mount($supervision_id) : void
    {
        $supervision = Supervision::find($supervision_id);
        // $this->supervision = Supervision::find($supervision_id);
        $this->a = $supervision->id;
    }

    /**
     * Se llama cuando se envía el formulario para crear una nueva tarea, además realiza la validación de los datos,
     * crea la tarea, limpia el campo de descripción del formulario y emite un evento taskAdded
     *
     * @return void
    */
    public function submit() : void
    {
        $this->validate();
        $this->createTask();
        $this->description = '';
        $this->emit('taskAdded');
    }

    /**
     * Prepara el registro de una nueva tarea
     *
     * @return void
    */
    public function createTask() : void
    {
        Control::create([
            'supervision_id' => $this->supervision_id,
            'description' => $this->description
        ]);
    }

    /**
     * Renderiza la vista para el registro de tareas de una supervisión de obra determinada
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        // $supervision = Supervision::find($this->supervision_id);
        return view('livewire.create-task', [
            'supervision' => Supervision::find($this->supervision_id)
        ]);
    }
}
