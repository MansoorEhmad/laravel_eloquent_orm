<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    // for has one of many relationship
    // if u want to get data of customers with child table orders (latest order) then
    // customers -> orders
    public function latestOrder(){
        return $this->hasOne(Order::class)->latestOfMany();
    }

    // for has one of many relationship
    // if u want to get data of customers with child table orders (oldest order) then
    // customers -> orders
    public function oldestOrder(){
        return $this->hasOne(Order::class)->oldestOfMany();
    }

    // for has one of many relationship
    // if u want to get data of customers with child table orders (largest order based on amount) then
    // customers -> orders
    public function largestOrder(){
        return $this->hasOne(Order::class)->OfMany('amount', 'max');
    }

    // for has one of many relationship
    // if u want to get data of customers with child table orders (smallest order based on amount) then
    // customers -> orders
    public function smallestOrder(){
        return $this->hasOne(Order::class)->OfMany('amount', 'min');
    }

    // for one to many relationship
    // if u want to get data of customers with child table orders then
    // customers [one to many] orders
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
