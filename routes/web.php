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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', function() {
//     return view('home');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
Route::get('/process', [App\Http\Controllers\ProcessController::class, 'create'])->name('process');
Route::get('/processo-cadastro', [App\Http\Controllers\ProcessController::class, 'store'])->name('processCadastro');
Route::get('/atividade', [App\Http\Controllers\ActivityController::class, 'show'])->name('activity');