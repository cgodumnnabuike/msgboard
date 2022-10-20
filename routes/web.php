<?php

use App\Http\Controllers\VisitorController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
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


/*
Route::get('/', function() {
    return view('welcome', [
    'title' => 'Hello World!!',
    'content' => 'Lorem ipusm...'
    ]);
    });
*/
Route::resource('/visitors', VisitorController::class);

// Route::resource('/auth',  LoginController::class);

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
?>