<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

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

Route::view('/register', 'register');

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    if (session()->has('email'))
    {
        session()->pull('email');
    }
    return redirect('login');
});

Route::view('/home', 'home');

Route::post('/login', [User::class, 'register'])->name('login');

Route::post('/home', [User::class, 'authenticate'])->name('home');

//Auth::routes(['verify' => true]);
