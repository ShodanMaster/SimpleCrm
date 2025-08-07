<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\RoleEnum;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            ClientSeeder::class,
            ProjectSeeder::class,
        ]);

        user::create([
            'first_name' => 'Akshay',
            'last_name' => 'K',
            'email' => 'akshay@example.com',
            'password' => 'akshay@example',
        ])->syncRoles([RoleEnum::ADMIN]);

        User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
