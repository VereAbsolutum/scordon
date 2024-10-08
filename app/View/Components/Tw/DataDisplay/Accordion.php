<?php

namespace App\View\Components\Tw\DataDisplay;

use Illuminate\View\Component;

class Accordion extends Component
{
    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function render()
    {
        return view('components.tw.data-display.accordion');
    }
}
