<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Profile;

class UserProfile extends Component
{

    public $user;
    public $cellphone_number, $address , $facebook , $linkedin;

    public function render()
    {
        return view('livewire.user-profile');
    }

    public function mount(){
        $this->cellphone_number = $this->user->profile->cellphone_number;
        $this->address = $this->user->profile->address;
        $this->facebook = $this->user->profile->facebook;
        $this->linkedin = $this->user->profile->linkedin;
    }

    public function update(Profile $profile)
    {
        $this->validate(rules: [
            'cellphone_number' => 'required|min:9|max:9',
            'address' => 'required|min:10',
            'facebook' => 'required',
            'linkedin' => 'required'
        ]);
        $profile->cellphone_number = $this->cellphone_number;
        $profile->address = $this->address;
        $profile->facebook = $this->facebook;
        $profile->linkedin = $this->linkedin;
        $profile->update();
        redirect()->route('cards.create',$this->user);
    }
}
