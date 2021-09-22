<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Image;

class PostIndex extends Component
{
    public function render()
    {
        $posts = Post::paginate(10);
        $imgs = Image::all();
        return view('livewire.post-index',compact('posts','imgs'));
    }
}
