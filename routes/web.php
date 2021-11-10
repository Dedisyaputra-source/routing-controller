<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route coba-routing
// Route::get('/Coba-routing', function () {
//     return 'ini adalah hasil percobaan routing';
// });

// route parameter
// Route::get('/Coba-routing/{name}', function () {
//     return 'ini adalah hasil percobaan routing' . $name;
// });

// menambahkan parameter optional
// Route::get('/Coba-routing/{name?}', function ($nama = 'nilai default') {
//     return 'ini adalah hasil percobaan routing' . $name;
// });

// route dengan controller
// Route::get('/users', [Usercontroller::class, 'index'])->name('list-user');

// route group middleware
// Route::middleware(['auth'])->group(function () {
//     Route::get('/users', [Usercontroller::class, 'index'])->name('list-user');
//     Route::get('/users/profile', function () {
//     });
// });

// route group prefix
// Route::prefix('users.')->group(function () {
//     Route::get('/users', [Usercontroller::class, 'index'])->name('list-user');
//     Route::get('/users/profile', function () {
//     });
// });

// route resource
// Route::resource('user', UserController::class);

// route resource names
// Route::resource('user', UserController::class)->names(['index' => 'user.list']);

// route resource parameters
Route::resource('user', UserController::class)->parameters(['index' => 'user.list']);
