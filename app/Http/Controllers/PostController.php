<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Type;
use App\Models\Post;
use App\Models\Image;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show(Post $post)
    {
        $img = Image::find($post->id);
        $images = Image::all();
        $otros = Post::where(function ($query) {
            $query->select('category_id')
                ->from('products')
                ->whereColumn('products.id', 'posts.product_id')
                ->orderByDesc('id')
                ->limit(1);
        }, $post->product->category->id)->paginate(8);
        return view('posts.show', compact('post', 'img', 'otros', 'images'));
    }
}
