<?php

namespace App\View\Components\Tw\Navigation;

use Illuminate\View\Component;

class MenuNav extends Component
{

    public $title;
    public $items;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $items)
    {
        $this->title = $title;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tw.navigation.menu-nav');
    }
}
