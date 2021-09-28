<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use App\Models\Card;

class HomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(8);
        $cards = card::paginate(8);
        $imgs = Image::all();
        return view('welcome',compact('posts','imgs','cards'));
    }
}
