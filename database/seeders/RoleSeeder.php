<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        //$productManager = Role::create(['name' => 'Product Manager']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'show-user',
            'create-ponto-coleta',
            'edit-ponto-coleta',
            'delete-ponto-coleta',
            'show-ponto-coleta',
            'create-agendamento',
            'edit-agendamento',
            'delete-agendamento',
            'show-agendamento',
            'create-cad-doadora',
            'edit-cad-doadora',
            'delete-cad-doadora',
            'show-cad-doadora'
        ]);

        
        
        
        
        //$productManager->givePermissionTo([
           // 'create-product',
            //'edit-product',
            //'delete-product'
       // ]);
    }
}
