<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class Customers extends Component
{
    public $customers = [];
    public $search = '';

    // public function mount()
    // {
    //     $this->customers = Customer::all();
    // }

    public function delete(Customer $customer)
    {
        $customer->delete();

        session()->flash('message', 'Customer deleted successfully.');
        return $this->redirect('/customers', navigate: true);
    }

    public function render()
    {
        if (!$this->search) {
            $this->customers = Customer::all();
        } else {
            $this->customers = Customer::where('name', 'like', '%' . $this->search . '%')->get();
        }

        return view('livewire.customers');
    }
}
