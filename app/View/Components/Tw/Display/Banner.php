<?php

namespace App\View\Components\Tw\Display;

use Illuminate\View\Component;

class Banner extends Component
{
    public $text;
    public $textHightlight;
    public $buttonText;
    public $imgSrc;

    /**
     * Create a new component instance.
     *
     * @param string $text
     * @param string $textHightLight
     * @param string $buttonText
     * @param string $imgSrc
     * @return void
     */
    public function __construct($text, $textHightlight, $buttonText, $imgSrc)
    {
        $this->text = $text;
        $this->textHightlight = $textHightlight;
        $this->buttonText = $buttonText;
        $this->imgSrc = $imgSrc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {        
        return view('components.tw.display.banner');
    }
}