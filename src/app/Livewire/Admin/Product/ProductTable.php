<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    use WithPagination;
    protected $listeners = [
        'MPL_updateList' => 'getProducts',
        'MPL_searchInList' => 'getSearch',
        ];
    public $search;

    public function getProducts()
    {
        $products = null;
        if ($this->search != '') {
            $products = Product::where('name', 'like', "%$this->search%")
                ->orWhere('description', 'like', "%$this->search%")
                ->paginate(5);
        } else{
            $products = Product::paginate(5);
        }
        
        return $products;
    }

    public function getSearch(string $search = '')
    {
        $this->resetPage();
        $this->search = $search;
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
        return view('livewire.admin.product.product-table', [
            'products' => $this->getProducts()
        ]);
    }
}
