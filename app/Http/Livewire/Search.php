<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Search extends Component
{

    public $search;

    public function render()
    {
        return view('livewire.search');
    }

    public function getResultsProperty(){
        return Post::where('title','LIKE','%'.$this->search . '%')->take(6)->get();
    }

}
