<?php

namespace App\View\Components\Generics\SideBarElements;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Create a new component instance.
     */
    public $class = "bg-green-400/30 hover:bg-green-400/50 ";
    public $active;

    public function __construct($class = '', $active = null, $change = 'default')
    {
        $this->class = $this->ifRoute($active, $change) . ' ' . $class;
        $this->active = $active;
    }

    public function ifRoute($active, $change)
    {   
        $base = 'flex items-center gap-4 p-3 text-lg transition-all duration-200';

        $isActive = request()->routeIs($active);

        $colors = $isActive 
            ? $this->getActiveRouteColor($change) 
            : $this->getBgColor($change);

        return trim("$base $colors");
    }

    public function getBgColor($change)
    {
        $bgColor = [
            'default' => 'text-gray-800 hover:bg-gray-100 hover:text-gray-900',
            'red' => 'text-red-800 hover:bg-red-50 hover:text-red-900',
            'blue' => 'text-blue-800 hover:bg-blue-50 hover:text-blue-900',
            'green' => 'text-emerald-800 hover:bg-emerald-50 hover:text-emerald-900',
            'stone' => 'text-stone-800 hover:bg-stone-100 hover:text-stone-900',
        ];
        return $bgColor[$change] ?? $bgColor['default'];
    }

    public function getActiveRouteColor($change)
    {
        $bgColor = [
            'default' => 'bg-cyan-600 text-white shadow-sm font-bold',
            'red' => 'bg-red-600 text-white shadow-sm font-bold',
            'blue' => 'bg-blue-600 text-white shadow-sm font-bold',
            'green' => 'bg-emerald-500 text-white shadow-sm font-bold',
            'stone' => 'bg-stone-500 text-white shadow-sm font-bold',
        ];
        
        return $bgColor[$change] ?? $bgColor['default'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.generics.side-bar-elements.link');
    }
}
