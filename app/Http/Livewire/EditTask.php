<?php

namespace App\Http\Livewire;

use App\Models\Control;
use App\Models\Supervision;
use Livewire\Component;

class EditTask extends Component
{
    public $task;
    public $description;
    public $supervision_id;
    public $a;

    protected $rules = [
        'description' => 'required|max:100|string'
    ];

    protected $listeners = [
        'editingTask'
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
        $this->getTask();
    }

    /**
     * Se llama cuando se envía el formulario para actualizar una tarea, además realiza la validación de los datos,
     * actualiza la tarea, limpia el campo de descripción del formulario y emite un evento taskEdited
     *
     * @return void
    */
    public function submit() : void
    {
        $this->validate();
        $this->updateTask();
        $this->task = null;
        $this->emit('taskEdited');
    }

    /**
     * Llama a actualizar una tarea y actualiza la lista de tareas
     *
     * @return void
    */
    public function editingTask() : void
    {
        $this->getTask();
    }

    /**
     * Actualiza la tarea que desea editarse
     *
     * @return void
    */
    public function updateTask() : void
    {
        $this->task->description = $this->description;
        $this->task->supervision_id = $this->supervision_id;
        $this->task->editing = false;

        $this->task->save();
    }

    /**
     * Obtiene la tarea a para ser actualizada
     *
     * @return void
    */
    public function getTask() : void
    {
        $this->task = Control::where('editing', '=', true)
        ->where('supervision_id', $this->supervision_id)->first();

        if($this->task) {
            $this->description = $this->task->description;
        }
    }

    /**
     * Renderiza la vista para la actualización de tareas de una supervisión de obra determinada
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        return view('livewire.edit-task', [
            'supervision' => Supervision::find($this->supervision_id)//nueva línea agregada
        ]);
    }
}
