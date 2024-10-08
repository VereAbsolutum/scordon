<?php

namespace App\View\Components\Tw\TextTitles;

use Illuminate\View\Component;

class H3 extends Component
{
    public $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tw.text.h3');
    }
}