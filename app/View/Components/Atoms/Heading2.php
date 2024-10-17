<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

class Heading2 extends Component
{
    public $variant;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($variant="1")
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
        return view('components.atoms.heading2');
    }
}