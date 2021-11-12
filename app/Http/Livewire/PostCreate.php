<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostCreate extends Component
{

    public $user;
    public $categories;

    public function render()
    {
        return view('livewire.post-create');
    }
}
