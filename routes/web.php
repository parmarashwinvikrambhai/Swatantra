<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\http\Controllers\LawyerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/allusers', function () {
    return view('manage-users');
});

//this is for client related
Route::get('/indexing', [AuthController::class, 'indexing'])->name('indexing');
Route::get('/practice', [ClientController::class, 'practice'])->name('practice');
Route::get('/client', [ClientController::class, 'client'])->name('client');
Route::get('/resources', [ClientController::class, 'resources'])->name('resources');
Route::get('/registration', [ClientController::class, 'registration'])->name('registration');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::get('/case', [ClientController::class, 'case'])->name('case');





// Route::get('/registrations', [AuthController::class, 'index'])->name('registrations');
// Route::post('register', [AuthController::class, 'register'])->name('registration');

Route::get('/viewuser', [UserController::class, 'index'])->name('viewuser');
Route::delete('/viewusers/{id}', [UserController::class, 'destroy'])->name('destroy');

//lawyer
    // Route::get('/lawyers', [LawyerController::class, 'view'])->name('lawyers.index');
Route::get('/lawyers', [LawyerController::class,'index'])->name('lawyers.index');
Route::get('/lawyers/create', [LawyerController::class,'create'])->name('lawyers.create');
Route::post('/lawyers', [LawyerController::class,'store'])->name('lawyers.store');
Route::get('/lawyers/{id}/edit', [LawyerController::class,'edit'])->name('lawyers.edit');
Route::put('/lawyers/{id}',[LawyerController::class,'update'])->name('lawyers.update');
Route::delete('/lawyers/{id}',[LawyerController::class,'destroy'])->name('lawyers.destroy'); 
