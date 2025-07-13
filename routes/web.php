<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Show all students
Route::get('/students', [studentController::class, 'index'])->name('students.index');

// Show form to create a new student
Route::get('/students/create', [studentController::class, 'create'])->name('students.create');

// Store new student
Route::post('/students', [studentController::class, 'store'])->name('students.store');

// Show a single student
Route::get('/students/{student}', [studentController::class, 'show'])->name('students.show');

// Show form to edit an existing student
Route::get('/students/{student}/edit', [studentController::class, 'edit'])->name('students.edit');

// Update an existing student
Route::put('/students/{student}', [studentController::class, 'update'])->name('students.update');

// Delete a student
Route::delete('/students/{student}', [studentController::class, 'destroy'])->name('students.destroy');