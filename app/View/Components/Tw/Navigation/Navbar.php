<?php

namespace App\View\Components\Tw\Navigation;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $navItems;

    public function __construct(array $navItems = [])
    {
        $this->navItems = $navItems;
    }

    public function render()
    {
        return view('components.tw.navigation.navbar');
    }
}