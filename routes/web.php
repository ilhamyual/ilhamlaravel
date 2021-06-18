<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendidikanController;

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

route::get('/hello', function() {
	return 'Hello World';
});

route::get('/belajar', function(){
	echo '<h1>Hello World</h1>';
	echo '<p>sedang belajar laravel</p>';
});

route::get('page/{nomor}', function($nomor){
	return 'ini halaman ke-'.$nomor;
});

route::get('/gambar', function(){
	return view('gambar');
});

//route::get('user', 'ManagementUserController@index');
route::resource('/user', ManagementUserController::class);

Route::get("/home", function(){
	return view("home");
});

Route::resource('/home', HomeController::class);

Route::resource('/dashboard', DashboardController::class);


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::resource('/pendidikan', PendidikanController::class);


