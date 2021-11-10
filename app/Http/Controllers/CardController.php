<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Card;
use App\Models\Service;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('cards.index', compact('user'));
    }

    public function create()
    {
        $user = Auth::user();
        $types = Type::all();
        return view('cards.create', compact('types', 'user'));
    }

    public function save()
    {
        $user = Auth::user();
        return view('cards.save', compact('user'));
    }

    public function show(Card $card)
    {
        $img = Image::find($card->id);
        $images = Image::all();
        $otros = Card::where(function ($query) {
            $query->select('type_id')
                ->from('services')
                ->whereColumn('services.id', 'cards.service_id')
                ->orderByDesc('id')
                ->limit(1);
        }, $card->service->type->id)->paginate(8);
        return view('cards.show', compact('card', 'img', 'otros', 'images'));
    }
    public function store(Request $request)
    {
        /* $request->validate([
            'image' => 'required|image'
        ]); */
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        /* fijando categoria */
        $type_id = Type::where('name', $request->type_name)->get();
        /* fijando usuario */
        $user = Auth::user();
        /* fijando producto */
        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->type_id = $type_id[0]->id;
        $service->save();
        /* fijando post */
        $card = new Card();
        $card->title = $request->title;
        $card->user_id = $user->id;
        $card->service_id = $service->id;
        $card->save();
        /* fijando imagen */
        $img = new Image();
        $img->imageable_id = $card->id;
        $img->imageable_type = 'use App\Models\Card';
        $img->url = "images/" . $imageName;
        $img->save();
        return redirect()->route('home');
    }
}
