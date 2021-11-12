<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Profile;
use App\Models\User;

class CardProfile extends Component
{

    public $user;
    public $cellphone_number, $address, $facebook, $linkedin;

    public function render()
    {
        return view('livewire.card-profile');
    }

    public function update(Profile $profile)
    {
        $profile->cellphone_number = $this->cellphone_number;
        $profile->address = $this->address;
        $profile->facebook = $this->facebook;
        $profile->linkedin = $this->linkedin;
        $profile->update();
        redirect()->route('cards.create',$this->user);
    }
}
