<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'ver usuarios',
        ]);

        Permission::create([
            'name' => 'editar usuarios',
        ]);

        Permission::create([
            'name' => 'agregar roles',
        ]);

        Permission::create([
            'name' => 'eliminar roles',
        ]);

        Permission::create([
            'name' => 'editar roles',
        ]);
    

    }
}
