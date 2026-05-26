<?php

namespace App\Livewire\Admin\Customer;

use App\Classes\Customer\CustomerRules;
use App\Classes\Customer\GetCustomer;
use App\Classes\Customer\PatchCustomer;
use App\Classes\Customer\RegisterCustomer;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Livewire\Component;

class NewCustomerForm extends Component
{
    public $first_name, $last_name, $email, $phone_number, $user_id;
    public int $editId = 0;
    public string $mode = '';
    public $customerList;
    public int $customer_id = 0;

    protected $listeners = [
        'MSCL_openEdit' => 'openEdit',
        'MSCL_openNew' => 'openNew'
        ];

    public function __construct()
    {
        $this->getCustomers();
    }

    public function openEdit($id)
    {
        $this->clean();
        $this->mode = 'edit';
        $getCustomer = new GetCustomer();
        $data = $getCustomer->getCustomer($id);
        $this->first_name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->email = $data['email'];
        $this->phone_number = $data['phone_number'];
        $this->editId = $id;
        $this->user_id = Auth::id();
    }

    public function save()
    {
        $validated = $this->validate(CustomerRules::rules());
        $newCustomer = new RegisterCustomer();
        $newCustomer->saveRegister($validated);
        $this->clean();
        $this->updateList();
    }

    public function patch()
    {
        $validated = $this->validate(CustomerRules::rules());
        $newCustomer = new PatchCustomer();
        $newCustomer->patchRegister($validated, $this->editId);
        $this->clean();
        $this->updateList();
    }

    public function clean()
    {
        $this->reset('first_name', 'last_name', 'email', 'phone_number');
    }

    public function openNew()
    {
        $this->reset();
        $this->user_id = Auth::id();
        $this->mode = 'create';
    }

    public function updateList()
    {
        $this->dispatch('NCuF_updateList');
    }

    public function getCustomers()
    {
        $this->customerList = Customer::select('first_name', 'last_name')->get();
    }

    public function render()
    {
        return view('livewire.admin.customer.new-customer-form');
    }
}
