<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Card;

class CardController extends Controller
{
    public function index(){
        
        return view('cards.index');
    }

    public function show(Card $card){
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
}
