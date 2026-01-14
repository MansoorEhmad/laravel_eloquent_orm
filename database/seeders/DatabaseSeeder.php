<?php

namespace Database\Seeders;

use App\Models\CompanyDetails;
use App\Models\Member;
use App\Models\User;
use App\Models\UserRole;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ProductSeeder::class,
            ProductDetailsSeeder::class,
            TeamSeeder::class,
            BookSeeder::class,
            MemberSeeder::class,
            RoleSeeder::class,
            UserRolesSeeder::class,
            EmployeeSeeder::class,
            CompanySeeder::class,
            CompanyDetailsSeeder::class,
            CustomerSeeder::class,
            OrderSeeder::class,
            CountrySeeder::class,
            CreateSeeder::class,
            PostSeeder::class,
            SubscribeSeeder::class,
            ParagraphSeeder::class,
            FileSeeder::class,
            VideoSeeder::class,
            TagSeeder::class,
            ClientSeeder::class,
            RecordSeeder::class,
            PeopleSeeder::class,
            ArticleSeeder::class
        ]);
    }
}
