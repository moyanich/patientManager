<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BloodGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BloodGroups::factory(8)->create();
    }
}
