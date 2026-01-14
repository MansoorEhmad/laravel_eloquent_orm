<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'company_name' => 'Mac',
            'employee_id' => 1,
        ]);
        Company::create([
            'company_name' => 'Android',
            'employee_id' => 2,
        ]);
        Company::create([
            'company_name' => 'Apple',
            'employee_id' => 3,
        ]);
        Company::create([
            'company_name' => 'Ink',
            'employee_id' => 4,
        ]);
        Company::create([
            'company_name' => 'Bano',
            'employee_id' => 5,
        ]);
    }
}
