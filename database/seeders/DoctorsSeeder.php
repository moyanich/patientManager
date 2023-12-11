<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Doctors::factory(20)->create();
    }
}
