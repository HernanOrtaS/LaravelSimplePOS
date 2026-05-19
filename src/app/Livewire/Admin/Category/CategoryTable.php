<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryTable extends Component
{
    protected $listeners = [
        'MCL_updateList' => 'getCategories',
        'MCL_searchInList' => 'getSearch',
        ];
    public $categories = [];
    public $search;

    public function mount()
    {
        $this->getCategories();
    }

    public function getCategories()
    {
        if ($this->search != '') {
            $this->categories = Category::where('name', 'like', "%$this->search%")
                ->orWhere('description', 'like', "%$this->search%")
                ->get();
        } else{
            $this->categories = Category::all();
        }
    }

    public function getSearch(string $search = '')
    {
        $this->search = $search;
        $this->getCategories();
    }

    public function edit($id)
    {
        $this->dispatch('CT_editCategory', $id);
    }

    public function detail($id)
    {
        $this->dispatch('CT_detailCategory', $id);
    }

    public function delete($id)
    {
        $this->dispatch('CT_deleteCategory', $id);
    }

    public function render()
    {
        return view('livewire.admin.category.category-table');
    }
}
