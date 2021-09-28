<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Card;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = Card::factory(50)->create();

        foreach ($cards as $card) {
            Image::factory(1)->create([
                'imageable_id' => $card->id,
                'imageable_type' => 'use App\Models\Card'
            ]);
        }
    }
}
