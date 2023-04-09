<?php

namespace App\Http\Livewire;

use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class TypesStudiesExtra extends Component
{
    use WithPagination;

    public $search = '';
    public $type_studies, $name, $description, $type_id;
    public $updateMode = false;
    protected $listeners = ['deleteTypeStudy'];

    /**
     * Elimina un tipo de estudio extra registrado y retorna un mensaje de estado
     * Si el estudio extra está pertenece a una obra de estudios no se podrá eliminar
     *
     * @param  Type  $type_study  - El tipo de estudio a eliminar
     * @return void
    */
    public function deleteTypeStudy(Type $type_study)
    {
        if ($type_study->studies()->exists())
        {
            return session()->flash('status', 'cannot-deleted');
        }
        $type_study->delete();
        session()->flash('status', 'type_study-deleted');
    }

    /**
     * Renderiza la vista para el listado y filtrado de los estudios extras registrado por cada usuario
     * del área de estudios
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        $this->type_studies = Type::all();
        $allTypes = Type::search('name', $this->search)->paginate(5);
        return view('livewire.types-studies-extra', [
            'allTypes' => $allTypes
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
        $this->description = '';
    }

    /**
     * Registra un nuevo tipo de estudio extra
     *
     * @return void
    */
    public function store() : void
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Type::create($validatedDate);
        session()->flash('status', 'type-created');
        $this->resetInputFields();
    }

    /**
     * Obtiene los datos de un tipo de estudio extra determinado
     *
     * @param int $id - El ID del tipo de estudio extra
     * @return void
    */
    public function edit($id) : void
    {
        $type = Type::findOrFail($id);
        $this->type_id = $id;
        $this->name = $type->name;
        $this->description = $type->description;
        $this->updateMode = true;
    }

    /**
     * Cierra el formulario y limpia los campos del registro o actualización de los tipos de estudios extras
     *
     * @return void
    */
    public function cancel() : void
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * Actualiza los datos de un tipo de estudio extra
     *
     * @return void
    */
    public function update() : void
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $type = Type::find($this->type_id);
        $type->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        $this->updateMode = false;
        session()->flash('status', 'type-created');
        $this->resetInputFields();
    }

    /* public function delete($id)
    {
        Type::find($id)->delete();
        session()->flash('status', 'type-deleted');
    } */
}
