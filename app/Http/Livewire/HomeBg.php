<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeBg extends Component
{

    public $flag = true;

    public function render()
    {
        return view('livewire.home-bg');
    }

    public function products(){
        $this->flag = true;
    }

    public function services(){
        $this->flag = false;
    }
    
}
