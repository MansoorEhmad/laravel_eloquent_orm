<?php

namespace Database\Seeders;

use App\Models\ProductDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductDetails::create([
            'price' => 50000,
            'product_id' => 1
        ]);
    }
}
