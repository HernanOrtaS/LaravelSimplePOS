<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithPagination;
    protected $listeners = [
        'MCL_updateList' => 'getCategories',
        'MCL_searchInList' => 'getSearch',
        ];
    public $search;

    public function getCategories()
    {
        $categories = null;
        if ($this->search != '') {
            $categories = Category::where('name', 'like', "%$this->search%")
                ->orWhere('description', 'like', "%$this->search%")
                ->paginate(5);
        } else{
            $categories = Category::paginate(5);
        }
        return $categories;
    }

    public function getSearch(string $search = '')
    {
        $this->resetPage();
        $this->search = $search;
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
        return view('livewire.admin.category.category-table', [
            'categories' => $this->getCategories()
        ]);
    }
}
