<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // First, clear existing admins to avoid duplicates
        Admin::where('email', 'admin@aticc.com')->delete();
        
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@aticc.com',
            'password' => Hash::make('password'),
            'role' => 'super_admin',
        ]);
    }
}