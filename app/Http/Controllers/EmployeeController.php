<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        // get employee with company details.
        //$employee = Employee::with('companyPhoneNumber')->find(2);

        // get employee with company & company details. 
        $employee = Employee::with('company')->with('companyPhoneNumber')->find(2);
        return $employee;
    }
}
