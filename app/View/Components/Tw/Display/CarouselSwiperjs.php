<?php

namespace App\View\Components\Tw\Display;

use Illuminate\View\Component;

class CarouselSwiperjs extends Component
{
    public $slides;
    
    public $uniqueId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slides, $uniqueId)
    {
        $this->slides = $slides;
        $this->uniqueId = $uniqueId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tw.display.carousel-swiperjs');
    }
}