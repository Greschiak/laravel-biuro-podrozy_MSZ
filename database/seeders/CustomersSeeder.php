<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomersSeeder extends Seeder
{
    public function run()
    {
        Customer::create([
            'name' => 'Admin',
            'surname' => 'User',
            'phone' => '123456789',
            'code' => '1234',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => 1 // 1 is for admin, 2 for customers
        ]
    );
    }
}