<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\RegisteredUserController;
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



Route::get('/', function () {
    return view('auth.index');
});

Route::get('login',function(){
    return view('login');
});

Route::get('register-hospital',function(){
    return view('register-hospital');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
/*
Route::resource('test',PruebasController::class)->names('test');


Route::resource('login',AuthenticatedSessionController::class)->names('login');*/
