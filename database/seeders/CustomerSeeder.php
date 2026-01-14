<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'name' => 'Mansoor'
            ],
            [
                'name' => 'Ali'
            ],
            [
                'name' => 'Tariq'
            ],
            [
                'name' => 'Jawad'
            ],
        ];

        foreach($customers as $customer){
            Customer::create($customer);
        }
    }
}
