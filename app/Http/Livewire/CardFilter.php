<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Card;
use App\Models\Image;

class CardFilter extends Component
{
    use WithPagination;

    public function render()
    {
        $cards = Card::where('id', '>', 0)->latest()->paginate(8);
        $imgs = Image::all();
        return view('livewire.card-filter', compact('cards', 'imgs'));
    }
}
