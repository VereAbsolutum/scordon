<?php

namespace App\View\Components\Tw\Display;

use Illuminate\View\Component;

class CarouselSwiperjsItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tw.display.carousel-swiperjs-item');
    }
}
