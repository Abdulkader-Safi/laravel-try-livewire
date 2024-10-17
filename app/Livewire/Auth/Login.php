<?php

namespace App\Livewire\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function loginUser(Request $request)
    {
        $validate = $this->validate([
            'email' => 'required|max:255|email',
            'password' => 'required|max:255',
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();

            if (Auth::check()) {
                session()->flash('message', 'New account created successfully');
                return $this->redirect('/customers', navigate: true);
            } else {
                session()->flash('error', 'Failed to log in the user');
                return $this->redirect('/customers', navigate: true);
            }
        }

        $this->addError('email', 'The password provided does not match the email');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
