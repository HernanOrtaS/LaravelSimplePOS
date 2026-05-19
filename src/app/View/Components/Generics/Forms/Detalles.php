<?php

namespace App\View\Components\Generics\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Detalles extends Component
{
    /**
     * Create a new component instance.
     */
    public $detail;
    
    public function __construct($detail)
    {
        $this->detail = $detail;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.generics.forms.detalles');
    }
}
