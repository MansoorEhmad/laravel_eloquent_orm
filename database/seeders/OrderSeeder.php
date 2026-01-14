<?php

namespace Database\Seeders;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'amount' => 1000,
                'date' => Carbon::create(2025, 07, 31)->toDateString(),
                'customer_id' => 1
            ],
            [
                'amount' => 5000,
                'date' => Carbon::create(2025, 8, 01)->toDateString(),
                'customer_id' => 2
            ],
            [
                'amount' => 500,
                'date' => Carbon::create(2025, 8, 01)->toDateString(),
                'customer_id' => 1
            ]
        ];

        foreach($orders as $order){
            Order::create($order);
        }
    }
}
