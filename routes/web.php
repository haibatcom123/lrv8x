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
    return view('/dashboard');
});

Route::get('/home', 'HomeController@index');
Route::get('/create', 'PostController@showform');
Route::post('/show', 'PostController@addDatabase') -> name('create');
Route::get('language/{locale}', 'LanguageController@index') -> name('language');


//Route::get('/login', 'LoginController@index');
// Route::group(['middleware'=>'auth'],function(){
//     Route::match(['get','post'],'login',[ 'as' => 'login', 'user'=> 'LoginController@index']);
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
