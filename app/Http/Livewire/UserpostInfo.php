<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Image;

class UserpostInfo extends Component
{
    public $post;
    public function render()
    {
        $images = Image::all();
        return view('livewire.userpost-info',compact('images'));
    }
}
