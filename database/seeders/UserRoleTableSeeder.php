<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRoles = ['SUPER-ADMIN', 'HOSPITAL', 'DOCTOR', 'PATIENT'];
        
        foreach ($userRoles as $userRole) {
            Role::create(['name' => $userRole]);
        }
    }
}
