<?php

namespace App\View\Components\utils;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class label extends Component
{
    /**
     * Create a new component instance.
     */
    public $labelfor;
    public $label;
    public function __construct($labelfor, $label)
    {
        $this->labelfor = $labelfor;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.utils.label');
    }
}
