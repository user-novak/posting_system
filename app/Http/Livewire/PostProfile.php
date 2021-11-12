<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;

class PostProfile extends Component
{

    public $user;
    public $cellphone_number, $address , $facebook , $linkedin;

    public function render()
    {
        return view('livewire.post-profile');
    }

    public function update(Profile $profile){
        $profile->cellphone_number = $this->cellphone_number;
        $profile->address = $this->address;
        $profile->facebook = $this->facebook;
        $profile->linkedin = $this->linkedin;
        $profile->update();
        redirect()->route('posts.create',$this->user);
    }
}