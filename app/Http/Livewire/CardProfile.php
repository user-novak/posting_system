<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Profile;

class CardProfile extends Component
{

    public $user;
    public $cellphone_number, $address , $facebook , $linkedin;

    public function render()
    {
        return view('livewire.card-profile');
    }

    public function default(){
        $this->view = 'create';
    }

    public function update(Profile $profile){
        $profile->cellphone_number = $this->cellphone_number;
        $profile->address = $this->address;
        $profile->facebook = $this->facebook;
        $profile->linkedin = $this->linkedin;
        $profile->update();
        $this->default();
    }
}