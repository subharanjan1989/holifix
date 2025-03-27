<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'superadmin.mt@yopmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => '11111111@Aa',
        ]);
        $superAdmin->assignRole('SUPER-ADMIN');
    }
}
