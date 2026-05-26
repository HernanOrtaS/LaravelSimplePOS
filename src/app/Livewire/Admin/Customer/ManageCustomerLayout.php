<?php

namespace App\Livewire\Admin\Customer;

use App\Classes\Customer\DeleteCustomer;
use App\Classes\Customer\GetCustomer;
use Livewire\Component;

class ManageCustomerLayout extends Component
{
    protected $listeners = [
        'CuT_editCustomer' => 'editCustomer',
        'CuT_detailCustomer' => 'detailCustomer',
        'CuT_deleteCustomer' => 'deleteCustomer',
        'NCuF_updateList' => 'updateList',
        ];
    public bool $open = false;
    public string $action = '';
    public string $Search = '';

    public $detalle;

    public function editCustomer($id)
    {
        $this->dispatch('MCuL_openEdit', $id);
        $this->open = true;
        $this->action = 'element';
    }

    public function detailCustomer($id)
    {
        $getCustomer = new GetCustomer();
        $data = $getCustomer->getCustomer($id);
        $this->open = true;
        $this->action = 'detail';
        $this->detalle = $data;
    }

    public function deleteCustomer($id)
    {
        $getCustomer = new GetCustomer();
        $data = $getCustomer->getCustomer($id);
        $this->open = true;
        $this->action = 'delete';
        $this->detalle = $data;
    }

    public function confirmDelete($id)
    {
        $deleteCustomer = new DeleteCustomer();
        $deleteCustomer->deleteCustomer($id);
        $this->reset('detalle');
        $this->updateList();
    }

    public function newCustomer()
    {
        $this->open = true;
        $this->action = 'element';
        $this->dispatch('MCuL_openNew');
    }

    public function updateList()
    {
        $this->open = false;
        $this->action = '';
        $this->dispatch('MCuL_updateList');
    }

    public function updatedSearch()
    {
        $this->dispatch('MCuL_searchInList', $this->Search);
    }

    public function render()
    {
        return view('livewire.admin.customer.manage-customer-layout');
    }
}
