<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PasswordGenerate extends Component
{
    public $password;
    public $visible = false;

    /* public function mount()
    {
        $this->visible = false;
    } */

    /**
     * Renderiza la vista del componente para generar contraseñas aleatorias
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        return view('livewire.password-generate');
    }

    /**
     * Genera aleatoriamente una contraseña de 8 caracteres
     *
     * @return void
    */
    public function generatePassword() : void
    {
        $lowercase = range('a', 'z');
        $uppercase = range('A', 'Z');
        $digits = range(0,9);
        $special = ['!', '#', '@', '%', '*', '$'];
        $chars = array_merge($lowercase, $uppercase, $digits, $special);
        $length = env('PASSWORD_LENGTH', 8);

        do {
            $password = array();

            for ($i=0; $i < $length; $i++) {
                $int = rand(0, count($chars) - 1);
                array_push($password, $chars[$int]);
            }
        } while (empty(array_intersect($special, $password)));

        $this->setPasswords(implode('', $password));
    }

    /* public function togglePassword()
    {
        $this->visible = !$this->visible;
    } */

    /**
     * Establece el campo de contraseña
     *
     * @param  string  $value
     * @return void
    */
    public function setPasswords($value) : void
    {
        $this->password = $value;
        // $this->password_confirmation = $value;
    }
}
