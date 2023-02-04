<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'department-list',
            'department-create',
            'department-edit',
            'department-delete',
            'patient-list',
            'patient-create',
            'patient-edit',
            'patient-delete',
            'doctor-list',
            'doctor-create',
            'doctor--edit',
            'doctor-delete',
         ];
      
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
