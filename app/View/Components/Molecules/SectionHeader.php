<?php

namespace App\View\Components\Molecules;

use Illuminate\View\Component;

class SectionHeader extends Component
{
    public $variant;
    public $title;
    public $subtitle;
    public $subheader;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($variant='1',$title='',$subtitle='',$subheader='')
    {
        $this->variant = $variant;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->subheader = $subheader;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.molecules.section-header');
    }
}