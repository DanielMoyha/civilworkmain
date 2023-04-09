<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    protected $listeners = ['deleteRole'];

    /**
     * Elimina un rol del sistema
     *
     * @param  Role  $role  - El rol a eliminar
     * @return void
    */
    public function deleteRole(Role $role) : void
    {
        $role->delete();
    }

    /**
     * Renderiza la vista para el listado de los roles del sistema
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        $roles = Role::all();
        return view('livewire.roles', [
            'roles' => $roles,
        ]);
    }
}
