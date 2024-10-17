<?php

namespace App\View\Components\Molecules;

use Illuminate\View\Component;

class ButtonCta extends Component
{
    public $variant;

    public function __construct($variant = 'primary')
    {
        $this->variant = $variant;
    }

    public function render()
    {
        return view('components.molecules.button-cta');
    }
}