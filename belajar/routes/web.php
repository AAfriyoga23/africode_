<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', function () {
    echo 'Hello World';
});*/

Route::get('/', [HomeController::class, 'dashboard']);

Route::get('/user', [HomeController::class, 'index']);
Route::get('/create', [HomeController::class, 'create'])->name('user.create');

// video latihan no 4 CRUD Laravel di menit 06.07
