<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = user::Create([
            'name' => 'Joseph',
            'email' => 'hello@aguacate.dev',
            'password' => bcrypt('12345678')
            ]);
        $user->assignRole('Admin');

        user::factory(99)->create();
    }
}
