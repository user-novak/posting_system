<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'electrodomesticos'
        ]);

        Category::create([
            'name' => 'ferreteria'
        ]);

        Category::create([
            'name' => 'alimentos'
        ]);

        Category::create([
            'name' => 'tecnologia'
        ]);

        Category::create([
            'name' => 'inmuebles'
        ]);

        Category::create([
            'name' => 'utensilios'
        ]);

        Category::create([
            'name' => 'otros'
        ]);
    }
}
