<?php

namespace App\Http\Livewire;

use App\Models\Control;
use App\Models\Supervision;
use Carbon\Carbon;
use Livewire\Component;

class CompletedTasks extends Component
{
    public $tasks;
    public $supervision_id;
    public $a;

    protected $listeners = [
        'taskAdded',
        'taskCompleted'
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
        $this->getTasks();
    }

    /**
     * Agrega una nueva tarea y actualiza la lista de tareas
     *
     * @return void
    */
    public function taskAdded() : void
    {
        $this->getTasks();
    }

    /**
     * Marca la tarea actual como completada y actualiza la lista de tareas
     *
     * @return void
    */
    public function taskCompleted() : void
    {
        $this->getTasks();
    }

    /**
     * Obtiene todas las tareas según la supervisión de obra visitada
     *
     * @return void
    */
    public function getTasks() : void
    {
        // $a = Supervision::find($this->supervision_id);
        $tasks = Control::where('completed_at', '!=', null)
            ->where('supervision_id', $this->supervision_id)
            ->orderBy('completed_at', 'desc')
            ->get();

        foreach ($tasks as $key => $task) {
            $date = Carbon::parse($task->completed_at);
            // $task->completed_at = $date->format('m/d/Y g:i A');
            $task->completed_at = $date;
        }
        $this->tasks = $tasks;
    }

    /**
     * Obtiene la tarea correspondiente al ID proporcionado
     *
     * @param int $id - El ID de la tarea a obtener
     * @return void
    */
    public function getTask($id) : void
    {
        $this->task = Control::find($id);
    }

    /**
     * Marca una tarea como "devuelta", cambiando su estado a "no completada".
     *
     * @param int $id - El ID de la tarea a devolver.
     * @return void
    */
    public function returnTask($id) : void
    {
        $this->getTask($id);
        $this->task->supervision_id;
        $this->task->completed_at = null;
        $this->task->save();
        $this->mount($id);
        $this->emit('taskReturned');
    }

    /**
     * Elimina la tarea correspondiente al ID proporcionado
     *
     * @param int $id - El ID de la tarea a obtener
     * @return void
    */
    public function deleteTask($id) : void
    {
        $this->getTask($id);
        $this->task->delete();
        $this->mount($id);
    }

    /**
     * Renderiza la vista para el cumplimiento de tareas de una supervisión de obra determinada
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        return view('livewire.completed-tasks');
    }
}
