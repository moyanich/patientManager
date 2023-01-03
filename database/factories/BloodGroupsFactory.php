<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BloodGroupsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bloodtype' => $this->faker->unique()->randomElement([
                'O+',
                'O-',
                'A+',
                'A-',
                'B+',
                'B-',
                'AB+',
                'AB-',
            ]),
        ];
    }
}
