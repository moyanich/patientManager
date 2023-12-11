<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'  => $this->faker->unique()->firstName(),
            'last_name'  => $this->faker->unique()->lastName(),
            'email'  => $this->faker->email(),
            'designation'  => $this->faker->word(),
            //'information',
           // 'specialist_area',
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'gender_id' => $this->faker->numberBetween($min = 1, $max = 2),
           /* 'contact_1',
            'contact_2',
            'title',
            'degree',
            'kin_name',
            'kin_phone',
            'kin_email',
            'address', */
        ];
    }
}

