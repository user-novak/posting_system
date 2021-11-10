<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Image;

class UsercardInfo extends Component
{
    public $card;

    public function render()
    {
        $images = Image::all();
        return view('livewire.usercard-info',compact('images'));
    }
}