<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\User;


class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(10)->create();

        foreach ($users as $user) {
            Profile::factory(1)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
