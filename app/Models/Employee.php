<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    // note i added both because i want to get from both company and company details.
    // 1: for one to one relationship
    // if u want to get data of employees with child table company then
    // employees [one to one] company
    public function company(){
        return $this->hasOne(Company::class);
    }

    // 2: for has one through relationship
    // if u want to get data of employees with sub child [means company details table, our ye company details table emplyee k sat link ni ha direct, ye company table k sat ha, our company table employee k sat.] table company details then
    // employees [one to one] company [one to one] company details
    public function companyPhoneNumber(){
        return $this->hasOneThrough(CompanyDetails::class, Company::class);
    }
}
