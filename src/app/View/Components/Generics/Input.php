<?php

namespace App\View\Components\Generics;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $class = "h-10 p-2 leading-6 flex-1 bg-gray-200/40 border-1 border-gray-300 rounded-xl";
   #public $class = "h-10 p-3 leading-10 flex-1 bg-gray-200/40 border border-gray-300 rounded-xl";
    public $name = '';

    public function __construct($class = '', $name = '')
    {
        $this->class = $this->class . ' ' . $class;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.generics.input');
    }
}
