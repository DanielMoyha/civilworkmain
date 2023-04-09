<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserRegister extends Component
{

    public $name;
    public $username;
    public $email;
    public $phone;
    public $address;
    public $city_id;
    public $password;

    public function rules() : array
    {
        return [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'phone' => 'required|numeric|digits:8',
            'address' => 'required|string|max:255',
            'city_id' => 'required',
            'password' => 'required',
        ];
    }

    public function messages() : array
    {
        return [
            'username.unique' => 'Este nombre de usuario ya existe',
            'email.unique' => 'Este email ya corresponde a un usuario existente',
        ];
    }

    /**
     * Las validaciones se realizan en cada cambio realizado en los campos del formulario
     *
     * @return void
    */
    public function updated($propertyName) : void
    {
        $this->validateOnly($propertyName);
    }

    /**
     * Renderiza la vista del formulario de registro de usuarios
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        return view('livewire.user-register');
    }
}
