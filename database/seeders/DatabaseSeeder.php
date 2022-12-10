<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->create([

            'id' => 1,
            'name' => 'admin'

        ]);
        Role::factory()->create([

            'id' => 2,
            'name' => 'viewer'

        ]);
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => bcrypt('secret'),
            'role_id' => 1
        ]);
    }
}
