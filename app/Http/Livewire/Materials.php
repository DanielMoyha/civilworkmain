<?php

namespace App\Http\Livewire;

use App\Models\Material;
use Livewire\WithPagination;
use Livewire\Component;

class Materials extends Component
{
    use WithPagination;

    public $search = '';
    public $materials;
    public $name;
    public $quantity;
    public $remarks;
    public $material_id;
    public $updateMode = false;
    protected $listeners = ['deleteMaterial'];

    /**
     * Elimina un material y retorna un mensaje de estado
     * Si el material está pertenece a una obra de construcción no se podrá eliminar
     *
     * @param  Material  $material  - El material a eliminar
     * @return void
    */
    public function deleteMaterial(Material $material)
    {
        if ($material->constructions()->exists())
        {
            return session()->flash('status', 'cannot-deleted');
        }
        $material->delete();
        session()->flash('status', 'material-deleted');
    }

    /**
     * Renderiza la vista para el listado y filtrado de todos los materiales de construcción
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        $this->materials = Material::all();
        $allMaterials = Material::search('name', $this->search)->paginate(10);
        return view('livewire.materials', [
            'allMaterials' => $allMaterials
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
        $this->quantity = '';
        $this->remarks = '';
    }

    /**
     * Registra un nuevo material de construcción
     *
     * @return void
    */
    public function store() : void
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'quantity' => 'required',
            'remarks' => 'nullable',
        ]);

        // dd($validatedDate);

        Material::create($validatedDate);
        session()->flash('status', 'material-created');
        $this->resetInputFields();
    }

    /**
     * Obtiene los datos de un material determinado
     *
     * @param int $id - El ID del material
     * @return void
    */
    public function edit($id) : void
    {
        $material = Material::findOrFail($id);
        $this->material_id = $id;
        $this->name = $material->name;
        $this->quantity = $material->quantity;
        $this->remarks = $material->remarks;
        $this->updateMode = true;
    }

    /**
     * Cierra el formulario y limpia los campos del registro o actualización de materiales
     *
     * @return void
    */
    public function cancel() : void
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * Actualiza los datos de un material
     *
     * @return void
    */
    public function update() : void
    {
        $this->validate([
            'name' => 'required',
            'quantity' => 'required',
            'remarks' => 'nullable',
        ]);

        $material = Material::find($this->material_id);
        $material->update([
            'name' => $this->name,
            'quantity' => $this->quantity,
            'remarks' => $this->remarks,
        ]);
        $this->updateMode = false;
        session()->flash('status', 'material-created');
        $this->resetInputFields();
    }

    /* public function delete($id)
    {
        Material::find($id)->delete();
        session()->flash('status', 'material-deleted');
    } */
}
