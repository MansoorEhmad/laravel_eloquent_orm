<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $peoples = collect([
            [
                'name' => 'Khalid',
                'email' => 'k@gmail.com',
                'city' => 'Mardan'
            ],
            [
                'name' => 'ali',
                'email' => 'ali@gmail.com',
                'city' => 'Malakand'
            ],
            [
                'name' => 'mansoor',
                'email' => 'm@gmail.com',
                'city' => 'Pesh'
            ],
            [
                'name' => 'shayan',
                'email' => 's@gmail.com',
                'city' => 'Isb'
            ],
            [
                'name' => 'Saad',
                'email' => 'sd@gmail.com',
                'city' => 'Sawabi'
            ]
        ]);
        $peoples->each(function ($people) {
            People::insert($people);
        });
    }
}
