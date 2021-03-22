<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);

        $role->permissions()->attach([1,2,3,4,5]);

        $role->syncPermissions(['ver usuarios','editar usuarios','agregar roles','eliminar roles','editar roles']);
    }
}
