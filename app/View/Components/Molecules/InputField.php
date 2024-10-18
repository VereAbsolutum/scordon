<?php

namespace App\View\Components\Molecules;

use Illuminate\View\Component;

class InputField extends Component
{
    public $type;
    public $placeholder;

    public function __construct($type = 'text', $placeholder = '')
    {
        $this->type = $type;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('components.molecules.input-field');
    }

    public function getIconContent()
    {
        switch ($this->type) {
            case 'email':
                return 'components.atoms.icon-email'; 
            default:
                return ''; 
        }
    }
}
