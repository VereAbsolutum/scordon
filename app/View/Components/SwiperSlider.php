<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SwiperSlider extends Component
{
    public $id;

    public $autoHeight = false;

    public function __construct($id,$autoHeight)
    {
        $this->id = $id;
        $this->autoHeight = $autoHeight;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.swiper-slider');
    }
}
