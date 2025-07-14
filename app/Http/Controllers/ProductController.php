<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        // get all
        // $products = Product::all();

        // get primary and child table
        // productDetails is function name from model Product
        // $products = Product::with('productDetails')->get();

        //$products = Product::with('productDetails')->find(1);

        // $products = Product::with('productDetails')->where('id', 1)->get();

        // if u want to search on child table then
        $products = Product::withWhereHas('productDetails', function($query){
            $query->where('price', 1000000);
        })->get();

        // if u want to get column from child table
        //echo $products->productDetails->price;
        
        return $products;
    }

    // store data using one to one relationship
    public function store(){
        $product = Product::create([
            'product_name' => 'Bag'
        ]);

        $product->productDetails()->create([
            'price' => 1200
        ]);
    }
}
