<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class CreateNurseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Nurse',
            'username' => 'nurse',
            'email' => 'test@nurse.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
    
    
        $role = Role::create(['name' => 'Nurse'])
            ->givePermissionTo([ 
                'patient-list',
                'patient-create',
                'patient-edit'
            ]);
        
     
        $user->assignRole([$role->id]);
    }
}
