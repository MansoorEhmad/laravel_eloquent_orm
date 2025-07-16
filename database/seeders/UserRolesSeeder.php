<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::create([
            'member_id' => 1,
            'role_id' => 1
        ]);
        UserRole::create([
            'member_id' => 1,
            'role_id' => 2
        ]);
        UserRole::create([
            'member_id' => 1,
            'role_id' => 3
        ]);
        UserRole::create([
            'member_id' => 3,
            'role_id' => 2
        ]);
        UserRole::create([
            'member_id' => 3,
            'role_id' => 3
        ]);
        UserRole::create([
            'member_id' => 2,
            'role_id' => 3
        ]);
    }
}
