<?php

namespace Database\Seeders;

use App\Models\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $creators = [
            [
                'create_name' => 'Khalid',
                'country_id' => 1
            ],
            [
               'create_name' => 'Mansoor',
                'country_id' => 1
            ],
            [
               'create_name' => 'Ali',
                'country_id' => 5
            ],
            [
               'create_name' => 'Hassan',
                'country_id' => 5
            ],
            [
                'create_name' => 'Jawad',
                'country_id' => 4
            ]
        ];

        foreach($creators as $create){
            Create::create($create);
        }
    }
}
