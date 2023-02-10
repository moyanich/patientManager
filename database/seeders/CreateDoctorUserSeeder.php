<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class CreateDoctorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
           // 'name' => 'Doctoer',
            'first_name' => 'Doctor',
            'last_name' => 'Smith',
            'username' => 'doctor',
            'email' => 'test@doctor.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'status' => '1',
        ]);
    
        $role = Role::create(['name' => 'Doctor'])
            ->givePermissionTo([ 
                'user-list',
                'user-create',
                'user-edit',
                'user-delete',
                'patient-list',
                'patient-create',
                'patient-edit'
            ]);
        
        $user->assignRole([$role->id]);
    }
}
