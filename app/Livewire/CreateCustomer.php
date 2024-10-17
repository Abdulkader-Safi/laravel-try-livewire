<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required | max:255',
            'email' => 'required | max:255 | email | unique:customers',
            'phone' => 'required | max:255 | unique:customers',
        ]);

        Customer::create($validated);

        session()->flash('message', 'Customer created successfully.');
        return $this->redirect('/customers', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-customer');
    }
}
