<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Image;
use Livewire\WithPagination;

class PostFilter extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::where('id', '>', 0)->latest()->paginate(8);
        $imgs = Image::all();
        return view('livewire.post-filter',compact('posts','imgs'));
    }
}
