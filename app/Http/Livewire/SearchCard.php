<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;

class SearchCard extends Component
{

    public $search;

    public function render()
    {
        return view('livewire.search-card');
    }

    public function getResultsProperty(){
        return Card::where('title','LIKE','%'.$this->search . '%')->take(6)->get();
    }
}
