<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctors;
use App\Models\Departments;
use Illuminate\Support\Facades\DB;

class DepartmentsDoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       $doctors = Doctors::all();

       foreach($doctors as $doctor) {

            if($doctors->count() > 0) {

                $departments_doctors =  [
                    [
                        'doctors_id' => Doctors::all()->pluck('id')->random(), 
                        'departments_id' => Departments::all()->pluck('id')->random(),
                    ]
                ];

                DB::table('departments_doctors')->insert( $departments_doctors);

            } else { echo "\e[31mTable is not empty, therefore NOT "; }
        
        }
    }
}
