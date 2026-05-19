<?php

namespace App\View\Components\Generics\SideBarElements;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SideBar extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $class = "rounded-xl flex flex-col transition-all duration-300 ease-in-out w-60 h-full ";
    public function __construct($title = 'default title', $class = 'bg-stone-200')
    {
        $this->title = $title;
        $this->class = trim($this->class . ' ' . $class);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.generics.side-bar-elements.side-bar');
    }
}
