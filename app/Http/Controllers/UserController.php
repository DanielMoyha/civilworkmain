<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Muestra la lista de todos los usuarios registrados.
     *
     * @return \Illuminate\View\View
    */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    /**
     * Muestra la vista del formulario para el registro de usuarios.
     *
     * @return \Illuminate\View\View
    */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Registra los datos llenados en el formulario de registro de usuarios y retonar el mensaje de éxito.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
    */
    public function store(Request $request)
    {
        //dd($request->all());
        // Ejecutar la medición de tiempo
        /* $responseTime = $request->server('REQUEST_TIME_FLOAT');
        $requestTime = microtime(true); */
        $requestTime = $request->server('REQUEST_TIME_FLOAT');

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'phone' => 'required|numeric|digits:8',
            'address' => 'required|string|max:255',
            'city_id' => 'required',
            'password' => ['required', Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city_id' => $request->city_id,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        $responseTime = microtime(true);
        // $response = ['message' => 'Usuario registrado exitosamente'];
        $responseTimeInSecs = ($responseTime - $requestTime) / 1000;

        return redirect()->route('admin.users.editRole', $user)->with('status','user-registered')->header('X-Response-Time', $responseTimeInSecs);
    }

    /**
     * Muestra el formulario de actualización de un usuario específico.
     *
     * @param  \App\Models\User  $user - El usuario a ser editado
     * @return \Illuminate\View\View
    */
    public function edit(User $user)
    {
        return view('admin.users.edit-all', [
            'user' => $user
        ]);
    }

    /**
     * Muestra el formulario de actualización del rol de un usuario específico junto con sus roles y los permisos
     * correspondientes.
     *
     * @param  \App\Models\User  $user - El rol de usuario a ser editado
     * @return \Illuminate\View\View
    */
    public function editRole(User $user)
    {
        $roles = Role::all();
        $userHasRoles = array_column(json_decode($user->roles, true), 'id');
        return view('admin.users.edit', [
            'user' => $user,
            'roles' => $roles,
            'userHasRoles' => $userHasRoles,
        ]);
    }

    /**
     * Actualiza los datos de un usuario específico.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
    */
    public function update(Request $request, User $user)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => ['required','string','max:255',Rule::unique('users')->ignore($user->id)],
            'email' => ['required','string','email','max:255',  Rule::unique('users')->ignore($user->id),],
            'is_active' => 'required','boolean',
            'phone' => 'required|numeric|digits:8',
            'address' => 'required|string|max:255',
            'city_id' => 'required',
        ]);

        $user->update($request->all());
        return redirect()->route('admin.users.index', $user)->with('status', 'user-updated');
    }

    /**
     * Actualiza los datos del rol de un usuario específico.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
    */
    public function updateRole(Request $request, User $user)
    {
        //sync se encargará de colocar nuevos registros en la tabla intermedia 'model_has_roles'
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.index', $user)->with('status', 'role-assigned');
    }

    /**
     * QUITAR FUNCIÓN
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('info', 'Usuario eliminado correctamente');
    } */
}
