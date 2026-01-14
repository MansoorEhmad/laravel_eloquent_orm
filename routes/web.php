<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ParagraphController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VideoController;
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


// has one through relationship testing
Route::get('/employees', [EmployeeController::class, 'index'])->name('get.employees');


// has one of many relationship testing
Route::get('/customers', [CustomerController::class, 'index'])->name('get.customers');
Route::get('/order/add', [OrderController::class, 'store'])->name('add.order');


// has many through relationship testing
Route::get('/countries', [CountryController::class, 'index'])->name('get.countries');
Route::get('/creates', [CreateController::class, 'index'])->name('get.creates');


// One to one polymorphic
Route::get('/subscriber/image', [SubscriberController::class, 'store'])->name('image.subscriber');
Route::get('/paragraph/image', [ParagraphController::class, 'store'])->name('image.paragraph');
Route::get('/paragraphs', [ParagraphController::class, 'index'])->name('get.paragraphs');




// One to many polymorphic
Route::get('/video/comment', [VideoController::class, 'store'])->name('comment.video');
Route::get('/file/comment', [FileController::class, 'store'])->name('comment.file');
Route::get('/files', [FileController::class, 'index'])->name('get.files');



// many to many polymorphic
Route::get('/file/tag', [FileController::class, 'store'])->name('tag.file');
Route::get('/files/tags', [FileController::class, 'index'])->name('tags.files');


// ELOQUENT With JSON Data Columns
Route::get('/json', [JsonController::class, 'store'])->name('json.save');
Route::get('/jsons', [JsonController::class, 'index'])->name('jsons');
Route::get('/json/update', [JsonController::class, 'update'])->name('json.change');


// Observers & Models events
Route::resource('client', ClientController::class);
Route::resource('record', RecordController::class);


// Query Scope
Route::resource('people', PeopleController::class);
Route::resource('article', ArticleController::class);


// Image / File upload
Route::resource('photo', PhotoController::class);


// Components
Route::get('/components', function () {
    return view('component');
});