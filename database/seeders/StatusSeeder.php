<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Status::factory(8)->create();

        Status::create([
            'id' => '1',
            'name' => 'Active'
        ]);

        Status::create(
            [
                'id' => '2',
                'name' => 'Inactive',
            ]
        );

        Status::create(
            [
                'id' => '3',
                'name' => 'New',
            ]
        );

        Status::create(
            [
                'id' => '4',
                'name' => 'Pending',
            ]
        );

        Status::create(
            [
                'id' => '5',
                'name' => 'Approved',
            ]
        );

        Status::create(
            [
                'id' => '6',
                'name' => 'Not Approved',
            ]
        );

        Status::create(
            [
                'id' => '7',
                'name' => 'Expired',
            ]
        );

        Status::create(
            [
                'id' => '8',
                'name' => 'Cancelled',
            ]
        );

    }
}




