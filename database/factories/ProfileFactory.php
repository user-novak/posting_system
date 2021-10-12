<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cellphone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->sentence(),
            'facebook' => $this->faker->sentence(),
            'linkedin' => $this->faker->sentence()
        ];
    }
}
