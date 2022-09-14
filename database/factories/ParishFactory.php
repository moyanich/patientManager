<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'Kingston',
                'St. Andrew',
                'Portland',
                'St. Thomas',
                'St. Catherine',
                'St. Mary',
                'St. Ann',
                'Manchester',
                'Clarendon',
                'Hanover',
                'Westmoreland',
                'St. James',
                'Trelawny',
                'St. Elizabeth'
            ])
        ];
    }
}
