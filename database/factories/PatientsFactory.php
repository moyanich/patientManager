<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patients;
use App\Models\Genders;

class PatientsFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patients::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'                => $this->faker->numberBetween($min = 1000, $max = 9000),
            'patient_no'        => $this->faker->numberBetween($min = 1000, $max = 9000),
            'first_name'         => $this->faker->firstName($gender = 'male'|'female'),
            'middle_name'        => $this->faker->lastName(),
            'last_name'          => $this->faker->lastName(),
            'gender_id'         => Genders::all()->random(), // Get the data from the the Genders Table
            'dob'               => $this->faker->date($format = 'Y-m-d', $max = 'now') ,
            'registration_date' => $this->faker->date($format = 'Y-m-d', $max = 'now') ,
            'home_phone'        => $this->faker->tollFreePhoneNumber(),
            'cell_number'       => $this->faker->tollFreePhoneNumber(),
            'email'             => $this->faker->email(),
            'emergency_number'  => $this->faker->tollFreePhoneNumber(),
        ];
    }
}



            
           
           
                    
