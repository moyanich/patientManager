<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Parish::factory(14)->create();
    }
}
