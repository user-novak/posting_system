<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class HomeController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();

        if (empty($user->profile) && (!empty($user))){
            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->save();
        }
        return view('welcome',compact('user'));
    }
}
