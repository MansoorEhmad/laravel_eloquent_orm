<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = collect([
            [
                'name' => 'Khalid',
                'email' => 'k@gmail.com'
            ],
            [
                'name' => 'ali',
                'email' => 'ali@gmail.com'
            ],
            [
                'name' => 'mansoor',
                'email' => 'm@gmail.com'
            ],
            [
                'name' => 'shayan',
                'email' => 's@gmail.com'
            ]
        ]);
        $clients->each(function ($client) {
            Client::insert($client);
        });
    }
}
