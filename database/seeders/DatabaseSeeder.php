<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        User::factory()->create([
            'name' => 'pavlov',
            'email' => 'test@example.com',
            'password' => Hash::make('123456'),
            'role_id' => Role::query()->orderBy('id')->firstOrFail(),
        ]);
    }
}
