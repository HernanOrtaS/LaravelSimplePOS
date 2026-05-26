<?php

namespace App\Livewire\Admin\Customer;

use App\Models\Customer;
use Livewire\Component;

class CustomerTable extends Component
{
    protected $listeners = [
        'MCuL_updateList' => 'getCustomers',
        'MCuL_searchInList' => 'getSearch',
        ];
    public $customers = [];
    public $search;

    public function mount()
    {
        $this->getCustomers();
    }

    public function getCustomers()
    {
        if ($this->search != '') {
            $this->customers = Customer::where('first_name', 'like', "%$this->search%")
                ->orWhere('last_name', 'like', "%$this->search%")
                ->get();
        } else{
            $this->customers = Customer::all();
        }
    }

    public function getSearch(string $search = '')
    {
        $this->search = $search;
        $this->getCustomers();
    }

    public function edit($id)
    {
        $this->dispatch('CuT_editCustomer', $id);
    }

    public function detail($id)
    {
        $this->dispatch('CuT_detailCustomer', $id);
    }

    public function delete($id)
    {
        $this->dispatch('CuT_deleteCustomer', $id);
    }

    public function render()
    {
        return view('livewire.admin.customer.customer-table');
    }
}
