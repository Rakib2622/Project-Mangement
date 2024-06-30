<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rakib',
            'email' => 'sm.rakib.773@gmail.com',
            'password'=> bcrypt('rakib24434'),
            'email_verified_at'=> time(),
        ]);

        Project::factory()
        ->count(55)
        ->hasTasks(30)
        ->create();
    }
}
