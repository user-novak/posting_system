<?php

namespace App\Http\Livewire;

use App\Models\Card;
use App\Models\Image;
use Livewire\Component;

class SaveCards extends Component
{
    public $user;

    public function render()
    {
        $cards = Card::where('id','>',0)->latest()->paginate(8);
        $imgs = Image::all();
        return view('livewire.save-cards',compact('cards','imgs'));
    }
}