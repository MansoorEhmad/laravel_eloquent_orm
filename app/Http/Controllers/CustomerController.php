<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        // get customer with latest order from orders
        //$customers = Customer::with('latestOrder')->find(1);

        // get customer with oldest order from orders
        //$customers = Customer::with('oldestOrder')->find(1);

        // get all customers with  oldest order from orders
        //$customers = Customer::with('oldestOrder')->get();

        // get customer with largest order (amount) from orders
        //$customers = Customer::with('largestOrder')->find(1);

        // get customer with smallest order (amount) from orders
        //$customers = Customer::with('smallestOrder')->find(1);

        // get all customers with all orders from orders
        //$customers = Customer::with('orders')->get();

        // get all customers with all orders with latest order from orders
        $customers = Customer::with('orders')->with('latestOrder')->get();
        return $customers;
    }
}
