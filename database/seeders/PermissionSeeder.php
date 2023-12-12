<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create-role',
            'edit-role',
            'delete-role',
            'show-role',
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
        ];

          // // Looping and Inserting Array's Permissions into Permission Table
         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
          }
    }
}
