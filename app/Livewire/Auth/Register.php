<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    public function storeUser()
    {
        $validate = $this->validate([
            'name' => 'required | max:255',
            'email' => 'required | max:255 | email | unique:users',
            'password' => 'required | max:255 | min:6',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        Auth::login($user);

        if (Auth::check()) {
            session()->flash('message', 'New account created successfully');
            return $this->redirect('/customers', navigate: true);
        } else {
            session()->flash('error', 'Failed to log in the user');
            return $this->redirect('/customers', navigate: true);
        }

    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
