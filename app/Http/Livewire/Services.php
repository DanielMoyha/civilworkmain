<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination;
    public $search = '';

    public $table_services, $name, $service_id;
    public $updateMode = false;

    protected $listeners = ['deleteService'];

    /**
     * Elimina un servicio
     *
     * @param  \App\Models\Service  $service  - El servicio a eliminar
     * @return void
    */
    public function deleteService(Service $service) : void
    {
        $service->delete();
    }

    /**
     * Renderiza la vista para el listado y filtrado de todos los servicios para ofrecer en las obras civiles
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        // sleep(0.3);
        $this->table_services = Service::all();
        $allServices = Service::search('name', $this->search)->paginate(10);
        return view('livewire.services', [
            'allServices' => $allServices
        ]);
    }

    /**
     * Limpia los campos del formulario
     *
     * @return void
    */
    private function resetInputFields() : void
    {
        $this->name = '';
    }

    /**
     * Registra un nuevo servicio
     *
     * @return void
    */
    public function store() : void
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);

        Service::create($validatedDate);
        session()->flash('status', 'service-created');
        $this->resetInputFields();
    }

    /**
     * Obtiene los datos de un servicio determinado
     *
     * @param int $id - El ID del servicio
     * @return void
    */
    public function edit($id) : void
    {
        $service = Service::findOrFail($id);
        $this->service_id = $id;
        $this->name = $service->name;
        $this->updateMode = true;
    }

    /**
     * Cierra el formulario y limpia los campos del registro o actualización de servicios
     *
     * @return void
    */
    public function cancel() : void
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * Actualiza los datos de un servicio determiando
     *
     * @return void
    */
    public function update() : void
    {
        $this->validate(['name' => 'required']);

        $service = Service::find($this->service_id);
        $service->update([
            'name' => $this->name,
        ]);
        $this->updateMode = false;
        session()->flash('status', 'service-created');
        $this->resetInputFields();
    }

    /* public function delete($id)
    {
        Service::find($id)->delete();
        session()->flash('status', 'service-deleted');
    } */
}
