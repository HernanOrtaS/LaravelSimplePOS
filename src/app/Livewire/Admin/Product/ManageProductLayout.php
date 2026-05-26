<?php

namespace App\Livewire\Admin\Product;

use App\Classes\Product\DeleteProduct;
use App\Classes\Product\GetProduct;
use Livewire\Component;

class ManageProductLayout extends Component
{
    protected $listeners = [
        'PT_editProduct' => 'editProduct',
        'PT_detailProduct' => 'detailProduct',
        'PT_deleteProduct' => 'deleteProduct',
        'NPF_updateList' => 'updateList',
        ];
    public bool $open = false;
    public string $action = '';
    public string $Search = '';

    public $detalle;

    public function editProduct($id)
    {
        $this->dispatch('MPL_openEdit', $id);
        $this->open = true;
        $this->action = 'element';
    }

    public function detailProduct($id)
    {
        $getProduct = new GetProduct();
        $data = $getProduct->getProduct($id);
        $this->open = true;
        $this->action = 'detail';
        $this->detalle = $data;
    }

    public function deleteProduct($id)
    {
        $getProduct = new GetProduct();
        $data = $getProduct->getProduct($id);
        $this->open = true;
        $this->action = 'delete';
        $this->detalle = $data;
    }

    public function confirmDelete($id)
    {
        $deleteProduct = new DeleteProduct();
        $deleteProduct->deleteProduct($id);
        $this->reset('detalle');
        $this->updateList();
    }

    public function newProduct()
    {
        $this->open = true;
        $this->action = 'element';
        $this->dispatch('MPL_openNew');
    }

    public function updateList()
    {
        $this->open = false;
        $this->action = '';
        $this->dispatch('MPL_updateList');
    }

    public function updatedSearch()
    {
        $this->dispatch('MPL_searchInList', $this->Search);
    }

    public function render()
    {
        return view('livewire.admin.product.manage-product-layout');
    }
}
