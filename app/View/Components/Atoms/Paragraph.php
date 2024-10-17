<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

class Paragraph extends Component
{
    public $variant;

    public function __construct($variant="1")
    {
        $this->variant = $variant;
    }

    public function render()
    {
        return view('components.atoms.paragraph');
    }
}