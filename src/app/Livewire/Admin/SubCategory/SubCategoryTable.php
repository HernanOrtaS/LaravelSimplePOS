<?php

namespace App\Livewire\Admin\SubCategory;

use App\Models\SubCategory;
use Livewire\Component;

class SubCategoryTable extends Component
{
    protected $listeners = [
        'MSCL_updateList' => 'getSubCategories',
        'MSCL_searchInList' => 'getSearch',
        ];
    public $subCategories = [];
    public $search;

    public function mount()
    {
        $this->getSubCategories();
    }

    public function getSubCategories()
    {
        if ($this->search != '') {
            $this->subCategories = SubCategory::where('name', 'like', "%$this->search%")
                ->orWhere('description', 'like', "%$this->search%")
                ->get();
        } else{
            $this->subCategories = SubCategory::all();
        }
    }

    public function getSearch(string $search = '')
    {
        $this->search = $search;
        $this->getSubCategories();
    }

    public function edit($id)
    {
        $this->dispatch('SCT_editSubCategory', $id);
    }

    public function detail($id)
    {
        $this->dispatch('SCT_detailSubCategory', $id);
    }

    public function delete($id)
    {
        $this->dispatch('SCT_deleteSubCategory', $id);
    }

    public function render()
    {
        return view('livewire.admin.sub-category.sub-category-table');
    }
}
