<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'carpinteria'
        ]);

        Type::create([
            'name' => 'delivery'
        ]);

        Type::create([
            'name' => 'limpieza'
        ]);

        Type::create([
            'name' => 'soporte tecnico'
        ]);

        Type::create([
            'name' => 'hospedaje'
        ]);

        Type::create([
            'name' => 'entretenimiento'
        ]);

        Type::create([
            'name' => 'otros'
        ]);
    }
}
