<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class PostEdit extends Component
{
    public $post;
    public $enunciado, $product_name, $description;

    public function render()
    {
        return view('livewire.post-edit');
    }

    public function mount()
    {
        $this->enunciado = $this->post->title;
        $this->product_name = $this->post->product->name;
        $this->description = $this->post->product->description;
    }

    public function update()
    {
        $this->validate(rules: [
            'enunciado' => 'required',
            'product_name' => 'required',
            'description' => 'required|min:20',
        ]);
        $user = User::find($this->post->user_id);
        $product = Product::find($this->post->product_id);
        $this->post->title = $this->enunciado;
        $product->name = $this->product_name;
        $product->description = $this->description;
        $this->post->update();
        $product->update();
        redirect()->route('posts.save', $user);
    }
}
