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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

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