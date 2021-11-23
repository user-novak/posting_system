<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Service;

class CardEdit extends Component
{
    public $card;
    public $alert = false;
    public $enunciado, $service_name, $description;

    public function render()
    {
        return view('livewire.card-edit');
    }

    public function mount()
    {
        $this->enunciado = $this->card->title;
        $this->service_name = $this->card->service->name;
        $this->description = $this->card->service->description;
    }

    public function update()
    {
        if (empty($this->enunciado) || empty($this->description) || empty($this->service_name)) {
            $this->alert = true;
        } else {
            $user = User::find($this->card->user_id);
            $service = Service::find($this->card->service_id);
            $this->card->title = $this->enunciado;
            $service->name = $this->service_name;
            $service->description = $this->description;
            $this->card->update();
            $service->update();
            redirect()->route('cards.save', $user);
        }
    }
}
