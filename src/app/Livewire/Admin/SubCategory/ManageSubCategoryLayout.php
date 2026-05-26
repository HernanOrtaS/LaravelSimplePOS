<?php

namespace App\Livewire\Admin\SubCategory;

use App\Classes\SubCategory\DeleteSubCategory;
use App\Classes\SubCategory\GetSubCategory;
use Livewire\Component;

class ManageSubCategoryLayout extends Component
{
    protected $listeners = [
        'SCT_editSubCategory' => 'editSubCategory',
        'SCT_detailSubCategory' => 'detailSubCategory',
        'SCT_deleteSubCategory' => 'deleteSubCategory',
        'NSCF_updateList' => 'updateList',
        ];
    public bool $open = false;
    public string $action = '';
    public string $Search = '';

    public $detalle;

    public function editSubCategory($id)
    {
        $this->dispatch('MSCL_openEdit', $id);
        $this->open = true;
        $this->action = 'element';
    }

    public function detailSubCategory($id)
    {
        $getSubCategory = new GetSubCategory();
        $data = $getSubCategory->getSubCategory($id);
        $this->open = true;
        $this->action = 'detail';
        $this->detalle = $data;
    }

    public function deleteSubCategory($id)
    {
        $getSubCategory = new GetSubCategory();
        $data = $getSubCategory->getSubCategory($id);
        $this->open = true;
        $this->action = 'delete';
        $this->detalle = $data;
    }

    public function confirmDelete($id)
    {
        $deleteSubCategory = new DeleteSubCategory();
        $deleteSubCategory->deleteSubCategory($id);
        $this->reset('detalle');
        $this->updateList();
    }

    public function newSubCategory()
    {
        $this->open = true;
        $this->action = 'element';
        $this->dispatch('MSCL_openNew');
    }

    public function updateList()
    {
        $this->open = false;
        $this->action = '';
        $this->dispatch('MSCL_updateList');
    }

    public function updatedSearch()
    {
        $this->dispatch('MSCL_searchInList', $this->Search);
    }

    public function render()
    {
        return view('livewire.admin.sub-category.manage-sub-category-layout');
    }
}
