<?php

namespace App\Livewire\Admin\Category;

use App\Classes\Category\DeleteCategory;
use App\Classes\Category\GetCategory;
use Livewire\Component;

class ManageCategoryLayout extends Component
{
    protected $listeners = [
        'CT_editCategory' => 'editCategory',
        'CT_detailCategory' => 'detailCategory',
        'CT_deleteCategory' => 'deleteCategory',
        'NCF_updateList' => 'updateList',
        ];
    public bool $open = false;
    public string $action = '';
    public string $Search = '';

    public $detalle;

    public function editCategory($id)
    {
        $this->dispatch('MCL_openEdit', $id);
        $this->open = true;
        $this->action = 'element';
    }

    public function detailCategory($id)
    {
        $getCategory = new GetCategory();
        $data = $getCategory->getCategory($id);
        $this->open = true;
        $this->action = 'detail';
        $this->detalle = $data;
    }

    public function deleteCategory($id)
    {
        $getCategory = new GetCategory();
        $data = $getCategory->getCategory($id);
        $this->open = true;
        $this->action = 'delete';
        $this->detalle = $data;
    }

    public function confirmDelete($id)
    {
        $deleteCategory = new DeleteCategory();
        $deleteCategory->deleteCategory($id);
        $this->reset('detalle');
        $this->updateList();
    }

    public function newCategory()
    {
        $this->open = true;
        $this->action = 'element';
        $this->dispatch('MCL_openNew');
    }

    public function updateList()
    {
        $this->open = false;
        $this->action = '';
        $this->dispatch('MCL_updateList');
    }

    public function updatedSearch()
    {
        $this->dispatch('MCL_searchInList', $this->Search);
    }

    public function render()
    {
        return view('livewire.admin.category.manage-category-layout');
    }
}
