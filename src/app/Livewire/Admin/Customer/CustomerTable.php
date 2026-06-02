<?php

namespace App\Livewire\Admin\Customer;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerTable extends Component
{
    use WithPagination;
    protected $listeners = [
        'MCuL_updateList' => 'getCustomers',
        'MCuL_searchInList' => 'getSearch',
        ];
    public $search;

    public function getCustomers()
    {
        $customers = null;
        if ($this->search != '') {
            $customers = Customer::where('first_name', 'like', "%$this->search%")
                ->orWhere('last_name', 'like', "%$this->search%")
                ->paginate(5);
        } else{
            $customers = Customer::paginate(5);
        }
        return $customers;
    }

    public function getSearch(string $search = '')
    {
        $this->resetPage();
        $this->search = $search;
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
        return view('livewire.admin.customer.customer-table', [
            'customers' => $this->getCustomers()
        ]);
    }
}
