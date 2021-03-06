<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Type;
use App\Models\Post;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('posts.index',compact('user'));
    }

    public function create(){
        $user = Auth::user();
        $categories = Category::all();
        return view('posts.create',compact('categories','user'));
    }


    public function save(){
        $user = Auth::user();
        return view('posts.save',compact('user'));
    }

    public function edit(Post $post){
        return view('posts.edit',compact('post'));
    }

    public function show(Post $post)
    {
        $images = Image::all();
        $otros = Post::where(function ($query) {
            $query->select('category_id')
                ->from('products')
                ->whereColumn('products.id', 'posts.product_id')
                ->orderByDesc('id')
                ->limit(1);
        }, $post->product->category->id)->paginate(8);
        return view('posts.show', compact('post', 'otros', 'images'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'description' => 'required|min:20',
            'image' => 'required',
            'category_name' => 'required'
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        /* fijando categoria */
        $category_id = Category::where('name',$request->category_name)->get();
        /* fijando usuario */
        $user = Auth::user();
        /* fijando producto */
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $category_id[0]->id;
        $product->save();
        /* fijando post */
        $post = new Post();
        $post->title = $request->title;
        $post->user_id = $user->id;
        $post->product_id = $product->id;
        $post->save();
        /* fijando imagen */
        $img = new Image();
        $img->imageable_id = $post->id;
        $img->imageable_type = 'use App\Models\Post';
        $img->url = "images/".$imageName;
        $img->save();
        return redirect()->route('home');
    }
}
