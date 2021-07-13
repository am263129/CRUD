<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});


Route::get('/user',[UserController::class, 'index']);

Route::permanentRedirect('/here', '/kk');
Route::permanentRedirect('/oops', '/user');
// Route::get('/profile',function(){
//     return view('profile')
//     ->with('name','Fasa')
//     ->with('occations','King');
// });


Route::resource("profile",'App\Http\Controllers\ProfileController');
Route::resource("products",'App\Http\Controllers\ProductController');