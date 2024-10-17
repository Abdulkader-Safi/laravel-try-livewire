<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $rowCount = 10;

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
            $customers = Customer::paginate($this->rowCount);
        } else {
            $customers = Customer::where('name', 'like', '%' . $this->search . '%')->paginate($this->rowCount);
        }

        return view('livewire.customers', [
            'customers' => $customers
        ]);
    }
}
