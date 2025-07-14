<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    // reverse relation
    // if u want to get data of product details with parent table products then
    // product dteails -> products
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
