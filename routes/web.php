<?php

use App\Http\Controllers\GoogleLogin;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login' , function(){
    Return view('Auth.login');
})->name('login');

Route::get('/register' , function(){
    Return view('Auth.sign_up');
});



Route::middleware([
    'auth:sanctum',
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
});

// GoogleLoginController redirect and callback urls
Route::get('/login/google', [GoogleLogin::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/login/google/callback', [GoogleLogin::class, 'handleGoogleCallback']);