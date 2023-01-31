<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cusauthcontr;

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
/*Route::get('/', function()
{
    return view ('homepage');
}); */
Route::get('/', [Cusauthcontr::class, 'home']);
Route::get('dashboard', [Cusauthcontr::class, 'dashboard']); 
Route::get('login', [Cusauthcontr::class, 'index'])->name('login');
Route::post('postlogin', [Cusauthcontr::class, 'login'])->name('postlogin'); 
Route::get('signup', [Cusauthcontr::class, 'signup'])->name('register-user');
Route::post('postsignup', [Cusauthcontr::class, 'signupsave'])->name('postsignup'); 
Route::get('signout', [Cusauthcontr::class, 'signOut'])->name('signout');
