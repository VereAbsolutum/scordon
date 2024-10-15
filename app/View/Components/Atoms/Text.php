<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

class Text extends Component
{
    public $variant;

    public function __construct($variant = 'body')
    {
        $this->variant = $variant;
    }

    public function render()
    {
        return view('components.atoms.text');
    }

    public function classes()
    {
        $classes = [
            'display'=> 'font-bold text-display',
            'heading1' => 'font-bold text-heading1',
            'heading2' => 'font-bold text-heading2',
            'heading3' => 'font-bold text-heading3',
            'body' => 'text-body',
            'small' => 'text-sm',

            'link' => 'text-body text-blue-500 underline hover:text-blue-700',
            'highlight' => 'text-body bg-yellow-300 p-1',
            'blockquote' => 'text-body border-l-4 border-gray-300 italic pl-4',

            'footnote' => 'text-sm text-xs text-gray-500',
        ];

        return $classes[$this->variant] ?? $classes['body'];
    }
}