<?php

namespace App\View\Components\Generics;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     */

    public $class = '';
    public $type = '';
    public $slot = '';
    public $change = '';

    public function __construct($class = '', $type = 'button', $slot = 'default', $change = 'default')
    {
        $this->class = $this->getClass($change) . ' ' . $class;
        $this->type = $type;
        $this->slot = $slot;
    }

    public function getClass($change = 'default') 
    {
        $styles = 'py-2 px-3 rounded-xl w-auto font-bold text-gray-100 border-b-4 border-r-4 active:border-b-0 cursor-pointer active:border-r-0 active:border-t-4 active:border-l-4 transition-all ';
        $bgColor = $this->getBgColor($change);
        
        return trim($styles . ' ' . $bgColor);
    }

    public function getBgColor($change)
    {
        $bgColor = [
            'default' => 'bg-cyan-500 hover:bg-cyan-400 active:bg-cyan-500 border-cyan-800',
            'red' => 'bg-red-500 hover:bg-red-400 active:bg-red-500 border-red-800',
            'blue' => 'bg-blue-500 hover:bg-blue-400 active:bg-blue-500 border-blue-800',
            'yellow' => 'bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-500 border-yellow-800',
            'green' => 'bg-green-500 hover:bg-green-400 active:bg-green-500 border-green-800',
            'emerald' => 'bg-emerald-500 hover:bg-emerald-400 active:bg-emerald-500 border-emerald-800',
            'stone' => 'bg-stone-500 hover:bg-stone-400 active:bg-stone-500 border-stone-800',
        ];
        return $bgColor[$change] ?? $bgColor['default'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.generics.button');
    }
}
