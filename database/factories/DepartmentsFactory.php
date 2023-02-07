<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentsFactory extends Factory
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
                'Cardiology',
                'Neurology',
                'Oncology',
                'Orthopedics',
                ' Gastroenterology',
                'Pediatrics',
                'Obstetrics and Gynecology',
                'Dermatology',
                'Ophthalmology',
                'Psychiatry',
                'Pulmonology',
                'Rheumatology',
                'Anesthesiology',
                'Radiology',
                'Surgery',
                'Nephrology',
                'Hematology',
                'Infectious Diseases',
                'Endocrinology',
                'Allergy and Immunology',
            ]),
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'status'                => $this->faker->numberBetween($min = 1, $max = 2),
        ];
    }
}
