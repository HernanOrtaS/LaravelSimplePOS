<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ProductTable extends Component
{
    protected $listeners = [
        'MPL_updateList' => 'getProducts',
        'MPL_searchInList' => 'getSearch',
        ];
    public $products = [];
    public $search;

    public function mount()
    {
        $this->getProducts();
    }

    public function getProducts()
    {
        if ($this->search != '') {
            $this->products = Product::where('name', 'like', "%$this->search%")
                ->orWhere('description', 'like', "%$this->search%")
                ->get();
        } else{
            $this->products = Product::all();
        }
    }

    public function getSearch(string $search = '')
    {
        $this->search = $search;
        $this->getProducts();
    }

    public function edit($id)
    {
        $this->dispatch('PT_editProduct', $id);
    }

    public function detail($id)
    {
        $this->dispatch('PT_detailProduct', $id);
    }

    public function delete($id)
    {
        $this->dispatch('PT_deleteProduct', $id);
    }

    public function render()
    {
        return view('livewire.admin.product.product-table');
    }
}
