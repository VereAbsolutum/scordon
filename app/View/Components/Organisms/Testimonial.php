<?php

namespace App\View\Components\Tw\Display;

use Illuminate\View\Component;

class Testimonial extends Component
{
    public $slides;
    public $uniqueId;
    public $title;
    public $subtitle;
    public $buttonText;
    public $testimonials;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slides, $uniqueId, $title, $subtitle, $buttonText,$testimonials)
    {
        $this->slides = $slides;
        $this->uniqueId = $uniqueId;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->buttonText = $buttonText;
        $this->testimonials = $testimonials;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.organisms.testimonial');
    }
}