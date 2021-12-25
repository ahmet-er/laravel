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
    return view('welcome');
});
Route::get('upload','App\Http\Controllers\UploadController@index');
Route::get('yataygecis','App\Http\Controllers\YatayGecisController@index');
Route::get('dersintibak','App\Http\Controllers\DersIntibakController@index');
Route::get('dgs','App\Http\Controllers\DgsController@index');
Route::get('yazokulu','App\Http\Controllers\YazOkuluController@index');

Route::get('capbasvuru','App\Http\Controllers\CapBasvuruController@index');
Route::get('anasayfa','App\Http\Controllers\AnasayfaController@index');
Route::get('log','App\Http\Controllers\LogController@index');
Route::resource('/img', App\Http\Controllers\ImageController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user','fireauth');


// Route::get('/home/customer', [App\Http\Controllers\HomeController::class, 'customer'])->middleware('user','fireauth');

Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify')->middleware('fireauth');

Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

Route::resource('/home/profile', App\Http\Controllers\Auth\ProfileController::class)->middleware('user','fireauth');

Route::resource('/password/reset', App\Http\Controllers\Auth\ResetController::class);
