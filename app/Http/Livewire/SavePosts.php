<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Image;
use Livewire\Component;

class SavePosts extends Component
{
    public $user;
    public $flag = false;

    public function render()
    {
        $posts = Post::where('id','>',0)->latest()->paginate(8);
        $imgs = Image::all();
        return view('livewire.save-posts',compact('posts','imgs'));
    }

    public function load(){
        $this->flag = true;
     }
}
