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

Route::get('/', 'WebController@homepage');

//Route::get('/login', function () {
//    return view('login');
//});
//
//Route::get('/register', function () {
//    return view('register');
//});

Route::get('/aboutus', function () {
    return view('admin.aboutus');
});

Route::get('/galleries', function () {
    return view('admin.galleries');
});

Route::get('/event', function () {
    return view('admin.event');
});

Route::get('/blog', function () {
    return view('admin.blog');
});

Route::get('/upload/addevent', function () {
    return view('admin.upload.addevent');
});

Route::get('/upload/addgalleries', function () {
    return view('admin.upload.addgalleries');
});

Route::get('/upload/updateblog', function () {
    return view('admin.upload.updateblog');
});

Route::get('/upload/updateevent', function () {
    return view('admin.upload.updateevent');
});

Route::get('/upload/updategalleries', function () {
    return view('admin.upload.updategalleries');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('login', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout')->name('logout');
    
    Route::get('home', 'HomeController@home')->name('home');
});
