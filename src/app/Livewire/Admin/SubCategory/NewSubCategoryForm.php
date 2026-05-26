<?php

namespace App\Livewire\Admin\SubCategory;

use App\Classes\SubCategory\SubCategoryRules;
use App\Classes\SubCategory\GetSubCategory;
use App\Classes\SubCategory\PatchSubCategory;
use App\Classes\SubCategory\RegisterSubCategory;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Livewire\Component;

class NewSubCategoryForm extends Component
{
    public $name, $description, $user_id;
    public int $editId = 0;
    public string $mode = '';
    public $categoryList;
    public int $category_id = 0;

    protected $listeners = [
        'MSCL_openEdit' => 'openEdit',
        'MSCL_openNew' => 'openNew'
        ];

    public function __construct()
    {
        $this->getCategories();
    }

    public function openEdit($id)
    {
        $this->clean();
        $this->mode = 'edit';
        $getSubCategory = new GetSubCategory();
        $data = $getSubCategory->getSubCategory($id);
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->category_id = $data['category_id'];
        $this->editId = $id;
        $this->user_id = Auth::id();
    }

    public function save()
    {
        $validated = $this->validate(SubCategoryRules::rules());
        $newCategory = new RegisterSubCategory();
        $newCategory->saveRegister($validated);
        $this->clean();
        $this->updateList();
    }

    public function patch()
    {
        $validated = $this->validate(SubCategoryRules::rules());
        $newCategory = new PatchSubCategory();
        $newCategory->patchRegister($validated, $this->editId);
        $this->clean();
        $this->updateList();
    }

    public function clean()
    {
        $this->reset('name', 'description');
    }

    public function openNew()
    {
        $this->reset();
        $this->user_id = Auth::id();
        $this->mode = 'create';
    }

    public function updateList()
    {
        $this->dispatch('NSCF_updateList');
    }

    public function getCategories()
    {
        $this->categoryList = Category::select('id', 'name')->get();
    }

    public function render()
    {
        return view('livewire.admin.sub-category.new-sub-category-form');
    }
}
