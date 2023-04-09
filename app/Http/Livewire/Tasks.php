<?php

namespace App\Http\Livewire;

use App\Models\Control;
use App\Models\Supervision;
use Livewire\Component;

class Tasks extends Component
{
    public $tasks;
    public $task;
    public $supervision_id;
    public $a;

    protected $listeners = [
        'taskAdded',
        'taskEdited',
        'taskReturned'
    ];

    /**
     * Se ejecuta al inicializar el componente
     *
     * @param int $supervision_id - El id de la supervisión a utilizar
     * @return void
    */
    public function mount($supervision_id)
    {
        $supervision_id = Supervision::find($this->supervision_id);
        // $$supervision_id->id = $this->id;
        $this->getTasks();
    }

    /**
     * Se llama una vez agregada una tarea y actualiza la lista de tareas
     *
     * @return void
    */
    public function taskAdded() : void
    {
        $this->getTasks();
    }

    /**
     * Se llama una vez actualizada una tarea y actualiza la lista de tareas
     *
     * @return void
    */
    public function taskEdited() : void
    {
        $this->getTasks();
    }

    /**
     * Se llama una vez retornar las tareas y actualiza el listado
     *
     * @return void
    */
    public function taskReturned() : void
    {
        $this->getTasks();
    }

    /**
     * Marca como completada una tarea determinada
     *
     * @param int $id - El ID de la tarea
     * @return void
    */
    public function taskCompleted($id) : void
    {
        $this->getTask($id);
        $this->task->supervision_id = $this->supervision_id;
        $this->task->completed_at = now()->toDateTimeString();
        $this->task->save();
        $this->mount($id);
        $this->emit('taskCompleted');
    }

    /**
     * Actualiza una tarea determinada
     *
     * @param int $id - El ID de la tarea
     * @return void
    */
    public function editTask($id) : void
    {
        $editingTask = Control::where('editing', '=', true)->first();

        if(!$editingTask) {
            $this->getTask($id);
            $this->task->editing = true;
            $this->task->save();
            $this->mount($id);
            $this->emit('editingTask');
        }
    }

    /**
     * Elimina una tarea determinada
     *
     * @param int $id - El ID de la tarea
     * @return void
    */
    public function deleteTask($id) : void
    {
        $this->getTask($id);
        $this->task->delete();
        $this->mount($id);
    }

    /**
     * Obtiene las tareas
     *
     * @return void
    */
    public function getTasks() : void
    {
        $this->tasks = Control::where('completed_at', null)
            ->where('editing', '!=', true)
            ->where('supervision_id', $this->supervision_id)
            ->get();
    }

    /**
     * Obtiene la información de una tarea determinada
     *
     * @param int $id - El ID de la tarea
     * @return void
    */
    public function getTask($id) : void
    {
        $this->task = Control::find($id);
    }

    /**
     * Renderiza la vista para el listado de todas las tareas del área de supervisión
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        return view('livewire.tasks');
    }
}
