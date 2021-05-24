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
    return view('/create');
});
Route::get('/home', 'HomeController@index');
Route::get('/login', 'LoginController@showform');


// Route::get('/language/{language}', function ($lang) {
//     App::setLocale($lang);
//     return view('/create');
// });
Route::get('/create', 'PostController@showform');

Route::post('/show', 'PostController@addDatabase') -> name('create');
Route::get('language/{locale}', 'LanguageController@index') -> name('language');
