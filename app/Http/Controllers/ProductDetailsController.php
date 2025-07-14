<?php

namespace App\Http\Controllers;

use App\Models\ProductDetails;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function index(){
        // $products = ProductDetails::all();

        // product is function name from model ProductDetails
        $products = ProductDetails::with('product')->get();
        return $products;
    }
}
