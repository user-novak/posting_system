<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Type;

class PostController extends Controller
{
    public function index(){
        
        return view('posts.index');
    }
}
