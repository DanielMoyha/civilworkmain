<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Muestra la lista de todos los roles del sistema.
     *
     * @return \Illuminate\View\View
    */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', [
            'roles' => $roles,
        ]);
    }

    /**
     * Muestra el formulario de registro de un nuevo rol juntamente con los permisos a ser asignados.
     *
     * @return \Illuminate\View\View
    */
    public function create()
    {
        $permissions = Permission::all();
        $roles = Role::all();

        return view('admin.roles.create', [
            'permissions' => $permissions,
            'roles' => $roles
        ]);
    }

    /**
     * Almacena el rol creado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:25'],
            'description' => ['required', 'string', 'max:150']
        ]);

        $role = Role::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        $role->permissions()->sync($request->permissions); //asignación de permisos al rol creado.
        return redirect()->route('admin.roles.index')->with('status','role-created');
    }

    /* public function show(Role $role)
    {
        return view('admin.roles.show');
    } */

    /**
     * Muestra el formulario de actualización de un rol determinado juntamente con los permisos prellenados
     * registrados anteriormente.
     *
     * @return \Illuminate\View\View
    */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        $userHasRoles = array_column(json_decode($role->permissions, true), 'id');
        return view('admin.roles.edit', [
            'role' => $role,
            'userHasRoles' => $userHasRoles,
            'permissions' => $permissions
        ]);
    }

    /**
     * Actualiza los cambios realizados de un rol determinado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Spatie\Permission\Models\Role $role
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
    */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $role->update($request->all());
        $role->permissions()->sync($request->permissions);
        return redirect()->route('admin.roles.edit', $role)->with('Datos Guardados Correctamente');
    }

    /**
     * Elimina un rol determinado del sistema.
     *
     * @param  Spatie\Permission\Models\Role $role
     * @return \Illuminate\Http\RedirectResponse
    */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index', $role)->with('status','role-deleted');
    }
}
