<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class Customers extends Component
{
    public $customers = [];

    public function mount()
    {
        $this->customers = Customer::all();
    }

    public function delete(Customer $customer)
    {
        $customer->delete();

        session()->flash('message', 'Customer deleted successfully.');
        return $this->redirect('/customers', navigate: true);
    }

    public function render()
    {
        return view('livewire.customers');
    }
}
