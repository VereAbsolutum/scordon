<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardDestaque extends Component
{
    public $title;
    public $badge;
    public $itens; // Renomeado para 'itens' em vez de 'servicos'

    public function __construct($title, $badge, $itens)
    {
        $this->title = $title;
        $this->badge = $badge;
        $this->itens = $itens; // Atualizado para usar 'itens'
    }

    public function render()
    {
        return view('components.card-destaque');
    }
}
