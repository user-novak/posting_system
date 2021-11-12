<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardCreate extends Component
{

    public $user;
    public $types;

    public function render()
    {
        return view('livewire.card-create');
    }
}
