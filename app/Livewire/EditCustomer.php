<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class EditCustomer extends Component
{
    public $customer = [];
    public $name = '';
    public $email = '';
    public $phone = '';

    public function update()
    {
        $validated = $this->validate([
            'name' => 'required | max:255',
            'email' => 'required | max:255 | email ',
            'phone' => 'required | max:255 ',
        ]);

        $this->customer->update($validated);

        session()->flash('message', 'Customer updated successfully.');
        return $this->redirect('/customers', navigate: true);
        // dd($this->all());
    }

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
    }

    public function render()
    {
        return view('livewire.edit-customer');
    }
}
