<?php

namespace App\Livewire\Admin\Product;

use App\Classes\PriceProductHistory\PriceProductHistoryRules;
use App\Classes\PriceProductHistory\RegisterPriceProductHistory;
use App\Classes\Product\ProductRules;
use App\Classes\Product\GetProduct;
use App\Classes\Product\PatchProduct;
use App\Classes\Product\RegisterProduct;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NewProductForm extends Component
{
    public $name, $description, $user_id, $product_id, $current_price;
    public int $editId = 0;
    public string $mode = '';
    public $subCategoryList;
    public int $sub_category_id = 0;

    protected $listeners = [
        'MPL_openEdit' => 'openEdit',
        'MPL_openNew' => 'openNew'
        ];

    public function __construct()
    {
        $this->getSubCategories();
    }

    public function openEdit($id)
    {
        $this->clean();
        $this->mode = 'edit';
        $getProduct = new GetProduct();
        $data = $getProduct->getProduct($id);
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->current_price = $data['current_price'];
        $this->sub_category_id = $data['sub_category_id'];
        $this->editId = $id;
        $this->user_id = Auth::id();
    }

    public function save()
    {
        $validated = $this->validate(ProductRules::rules());
        $newProduct = new RegisterProduct();
        $productRegistered = $newProduct->saveRegister($validated);
        
        $this->product_id = $productRegistered['id'];

        $priceValidated = $this->validate(PriceProductHistoryRules::rules());
        $priceHistory = new RegisterPriceProductHistory();
        
        $priceHistory->saveRegister($priceValidated);

        $this->clean();
        $this->updateList();
    }

    public function patch()
    {
        $validated = $this->validate(ProductRules::rules());
        $newProduct = new PatchProduct();
        $newProduct->patchRegister($validated, $this->editId);

        $this->product_id = $this->editId;

        $priceValidated = $this->validate(PriceProductHistoryRules::rules());
        $priceHistory = new RegisterPriceProductHistory();
        
        $priceHistory->saveRegister($priceValidated);

        $this->clean();
        $this->updateList();
    }

    public function clean()
    {
        $this->reset('name', 'description', 'current_price');
    }

    public function openNew()
    {
        $this->reset();
        $this->user_id = Auth::id();
        $this->mode = 'create';
    }

    public function updateList()
    {
        $this->dispatch('NPF_updateList');
    }

    public function getSubCategories()
    {
        $this->subCategoryList = SubCategory::select('id', 'name')->get();
    }

    public function render()
    {
        return view('livewire.admin.product.new-product-form');
    }
}
