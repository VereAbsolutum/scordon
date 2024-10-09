<?php

namespace App\View\Components\Tw\Layouts;

use Illuminate\View\Component;

class Footer extends Component
{
    public $footerItems;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($footerItems)
    {
        $this->footerItems = $footerItems;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tw.layouts.footer');
    }
}