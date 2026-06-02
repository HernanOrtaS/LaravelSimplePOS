<?php

namespace App\Livewire\Admin\SubCategory;

use App\Models\SubCategory;
use Livewire\Component;
use Livewire\WithPagination;

class SubCategoryTable extends Component
{
    use WithPagination;
    protected $listeners = [
        'MSCL_updateList' => 'getSubCategories',
        'MSCL_searchInList' => 'getSearch',
        ];
    public $search;

    public function getSubCategories()
    {
        $subCategories = null;
        if ($this->search != '') {
            $subCategories = SubCategory::where('name', 'like', "%$this->search%")
                ->orWhere('description', 'like', "%$this->search%")
                ->paginate(5);
        } else{
            $subCategories = SubCategory::paginate(5);
        }

        return $subCategories;
    }

    public function getSearch(string $search = '')
    {
        $this->resetPage();
        $this->search = $search;
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
        return view('livewire.admin.sub-category.sub-category-table', [
            'subCategories' => $this->getSubCategories()
        ]);
    }
}
