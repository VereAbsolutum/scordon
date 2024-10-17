<?php

namespace App\View\Components\Molecules;

use Illuminate\View\Component;

class ButtonNav extends Component
{
    public $variant;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($variant='left')
    {
        $this->variant = $variant;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.molecules.button-nav');
    }
}