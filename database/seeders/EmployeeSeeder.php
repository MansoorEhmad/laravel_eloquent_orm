<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'employee_name' => 'Khalid'
        ]);
        Employee::create([
            'employee_name' => 'Mansoor'
        ]);
        Employee::create([
            'employee_name' => 'Junaid'
        ]);
        Employee::create([
            'employee_name' => 'Jawad'
        ]);
        Employee::create([
            'employee_name' => 'Ali'
        ]);
    }
}
