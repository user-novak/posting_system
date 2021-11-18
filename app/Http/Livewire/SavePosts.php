<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Image;
use Livewire\Component;

class SavePosts extends Component
{
    public $user;
    public $post_save_count = 0;

    public function render()
    {
        $posts = Post::where('id', '>', 0)->latest()->paginate(8);
        $imgs = Image::all();
        return view('livewire.save-posts', compact('posts', 'imgs'));
    }

    public function load()
    {
        $this->post_save_count = 1 + $this->post_save_count;
    }

    public function destroy($id){
        Post::destroy($id);
        $this->post_save_count = $this->post_save_count -1;
    }
}
