<?php

namespace App\View\Components\Tw\Display;

use Illuminate\View\Component;

class CardHighlight extends Component
{
    public $title;
    public $badge;
    public $items;

    public function __construct($items, $title = "", $badge = "#")
    {
        $this->title = $title;
        $this->items = $items;
        $this->badge = $badge;
    }

    public function render()
    {
        return view('components.tw.display.card-highlight');
    }
}
