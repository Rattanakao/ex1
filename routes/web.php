<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@index');

Route::get('/about', 'HomeController@about');

Route::get('/contact', 'HomeController@contact');

Route::get('/user', 'UserController@index');

Route::get('/user/create', 'UserController@create');

Route::get('/user/{name}', 'UserController@showname');

Route::get('/user/{name}/{age}', 'UserController@shownameandage');

Route::get('/user', function () {
    return ('หน้า user');
});

Route::get('/user/create', function () {
    return ('สร้าง user');
});

Route::get('/user/{name}', function ($name) {
    return ("สวัสดี $name");
});

Route::get('/user/{name}/{age}', function ($name, $age) {
    return ("สวัสดี $name อายุ $age ปี");
});
