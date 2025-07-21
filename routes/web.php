<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\TeamController;
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

// one to one relationship testing
Route::get('/products', [ProductController::class, 'index'])->name('get.products');
Route::get('/product-details', [ProductDetailsController::class, 'index'])->name('get.product.details');
Route::get('/product/add', [ProductController::class, 'store'])->name('add.product');


// one to many relationship testing
Route::get('/teams', [TeamController::class, 'index'])->name('get.teams');
Route::get('/books', [BookController::class, 'index'])->name('get.books');
Route::get('/team/add', [TeamController::class, 'store'])->name('add.team');


// many to many relationship testing
Route::get('/members', [MemberController::class, 'index'])->name('get.members');
Route::get('/roles', [RoleController::class, 'index'])->name('get.roles');
Route::get('/member/add', [MemberController::class, 'store'])->name('add.member');
Route::get('/role/add', [RoleController::class, 'store'])->name('add.role');