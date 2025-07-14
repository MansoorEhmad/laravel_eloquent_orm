<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    // for one to one relationship
    // if u want to get data of products with child table product details then
    // products -> product details
    public function productDetails(){
        return $this->hasOne(ProductDetails::class);
    }
}
