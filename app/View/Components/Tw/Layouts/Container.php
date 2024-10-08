<?php

namespace App\View\Components\Tw\Layouts;

use Illuminate\View\Component;

class Container extends Component
{
    public $class;

    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function render()
    {
        return view('components.tw.layouts.container');
    }
}
