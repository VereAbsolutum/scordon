<?php

namespace App\View\Components\Organisms;

use Illuminate\View\Component;

class CardTestimonial extends Component
{
    public $buttonText;
    public $subtitle;
    public $title;
    public $testimonial;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($buttonText = 'Saiba mais.', $subtitle = '', $title = '', $testimonial = '')
    {
        $this->buttonText = $buttonText;
        $this->subtitle = $subtitle;
        $this->title = $title;
        $this->testimonial = $testimonial;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.organisms.card-testimonial');
    }
}