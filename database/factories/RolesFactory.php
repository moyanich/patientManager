<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role_name' => $this->faker->unique()->randomElement([
                'administrator',
                'doctor',
                'nurse',
                'staff',
                'guest'
            ]),
            'access_level' => $this->faker->unique()->randomElement([
                '1',
                '2',
                '3',
                '4',
                '5',
            ]),
        ];
    }
}
