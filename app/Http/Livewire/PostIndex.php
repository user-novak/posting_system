<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Image;
use App\Models\Category;
use Livewire\WithPagination;

class PostIndex extends Component
{
    use WithPagination;

    public $category_id = 1;
    public $flag = false;
    public $user;

    public function render()
    {
        $categories = Category::all();
        $posts = Post::where(function ($query) {
            $query->select('category_id')
                ->from('products')
                ->whereColumn('products.id', 'posts.product_id')
                ->orderByDesc('id')
                ->limit(1);
        }, $this->category_id)->paginate(8);
        $imgs = Image::all();
        return view('livewire.post-index', compact('posts', 'imgs', 'categories'));
    }

    public function posts()
    {
        $this->flag = false;
    }

    public function filter()
    {
        $this->flag = true;
    }
}
