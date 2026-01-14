<?php

namespace Database\Seeders;

use App\Models\CompanyDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyDetails::create([
            'phone_number' => '03402817001',
            'company_id' => 1,
        ]);
        CompanyDetails::create([
            'phone_number' => '03402817002',
            'company_id' => 2,
        ]);
        CompanyDetails::create([
            'phone_number' => '03402817003',
            'company_id' => 3,
        ]);
        CompanyDetails::create([
            'phone_number' => '03402817004',
            'company_id' => 4,
        ]);
        CompanyDetails::create([
            'phone_number' => '03402817005',
            'company_id' => 5,
        ]);
    }
}
