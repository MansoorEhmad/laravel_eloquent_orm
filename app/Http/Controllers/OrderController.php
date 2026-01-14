<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(){
        // add new order
        Order::create([
            'amount' => 250,
            'date' => Carbon::create(2025, 8, 02)->toDateString(),
            'customer_id' => 1
        ]);
    }
}
