<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Type;
use App\Models\Card;
use App\Models\Image;
use Livewire\WithPagination;

class CardIndex extends Component
{
    use WithPagination;

    public $type_id = 1;
    public $flag = false;

    public $user;

    public function render()
    {

        $types = Type::all();
        $cards = Card::where(function ($query) {
            $query->select('type_id')
                ->from('services')
                ->whereColumn('services.id', 'cards.service_id')
                ->orderByDesc('id')
                ->limit(1);
        }, $this->type_id)->paginate(8);
        $imgs = Image::all();

        return view('livewire.card-index', compact('cards', 'imgs', 'types'));
    }

    public function cards()
    {
        $this->flag = false;
    }

    public function filter()
    {
        $this->flag = true;
    }
}
