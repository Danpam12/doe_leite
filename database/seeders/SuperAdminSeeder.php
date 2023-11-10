<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'paulo', 
            'email' => 'paulo@gmail.com',
            'password' => Hash::make('paulo1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Gabriel', 
            'email' => 'gabriel@gmail.com',
            'password' => Hash::make('gabriel1234')
        ]);
        $admin->assignRole('Admin');

        //Creating Po Manager User
        //$pontoManager = User::create([
            //'name' => 'Abdul Muqeet', 
            //'email' => 'muqeet@allphptricks.com',
           // 'password' => Hash::make('muqeet1234')
       /// ]);
        //$productManager->assignRole('Product Manager');
    }
}
