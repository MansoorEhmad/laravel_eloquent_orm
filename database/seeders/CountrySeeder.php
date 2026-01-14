<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'country_name' => 'pakistan',
            ],
            [
                'country_name' => 'UK',
            ],
            [
                'country_name' => 'USA',
            ],
            [
                'country_name' => 'Canada',
            ],
            [
                'country_name' => 'India',
            ]
        ];

        foreach($countries as $country){
            Country::create($country);
        }
    }
}
