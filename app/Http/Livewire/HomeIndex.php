<?php

namespace App\Http\Livewire;

use App\Models\Card;
use App\Models\Post;
use App\Models\Image;
use Livewire\WithPagination;
use Livewire\Component;

class HomeIndex extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::where('id','>',0)->latest()->paginate(8);
        $cards = Card::where('id','>',0)->latest()->paginate(8);
        $imgs = Image::all();
        return view('livewire.home-index', compact('posts', 'imgs', 'cards'));
    }
}
