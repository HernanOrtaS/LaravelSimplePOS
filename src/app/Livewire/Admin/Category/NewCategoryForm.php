<?php

namespace App\Livewire\Admin\Category;

use App\Classes\Category\CategoryRules;
use App\Classes\Category\GetCategory;
use App\Classes\Category\PatchCategory;
use App\Classes\Category\RegisterCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NewCategoryForm extends Component
{
    public $name, $description, $user_id;
    public int $editId = 0;
    public string $mode = '';

    protected $listeners = [
        'MCL_openEdit' => 'openEdit',
        'MCL_openNew' => 'openNew'
        ];


    public function openEdit($id)
    {
        $this->clean();
        $this->mode = 'edit';
        $getCategory = new GetCategory();
        $data = $getCategory->getCategory($id);
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->editId = $id;
        $this->user_id = Auth::id();
    }

    public function save()
    {
        $validated = $this->validate(CategoryRules::rules());
        $newCategory = new RegisterCategory();
        $newCategory->saveRegister($validated);
        $this->clean();
        $this->updateList();
    }

    public function patch()
    {
        $validated = $this->validate(CategoryRules::rules());
        $newCategory = new PatchCategory();
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
        $this->dispatch('NCF_updateList');
    }

    public function render()
    {
        return view('livewire.admin.category.new-category-form');
    }
}
