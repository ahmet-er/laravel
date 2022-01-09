<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UploadController;


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

Route::group(['prefix' => 'upload', 'as' => 'upload.'], function () {
    Route::get('/', [UploadController::class, 'index'])->name('index');
    Route::post('/store/{type}', [UploadController::class, 'store'])->name('store');
    Route::post('/capstore/{type}', [UploadController::class, 'capstore'])->name('capstore');
    Route::post('/dgsstore/{type}', [UploadController::class, 'dgsstore'])->name('dgsstore');
    Route::post('/yataystore/{type}', [UploadController::class, 'yataystore'])->name('yataystore');
    Route::post('/dersintibakstore/{type}', [UploadController::class, 'dersintibakstore'])->name('dersintibakstore');
    Route::post('/profilfotostore/{type}', [UploadController::class, 'profilfotostore'])->name('profilfotostore');
});

Route::group(['prefix' => 'status', 'as' => 'status.'], function () {
    Route::get('/store/{id}/{type}', [StatusController::class, 'store'])->name('store');
});

Route::get('yataygecis','App\Http\Controllers\YatayGecisController@index');
Route::get('dersintibak','App\Http\Controllers\DersIntibakController@index');
Route::get('dgs','App\Http\Controllers\DgsController@index');
Route::get('yazokulu','App\Http\Controllers\YazOkuluController@index');

Route::get('capbasvuru','App\Http\Controllers\CapBasvuruController@index');

Route::get('yazokuluupload','App\Http\Controllers\YazUploadController@index');
Route::get('capupload','App\Http\Controllers\CapUploadController@index');
Route::get('dgsupload','App\Http\Controllers\DgsUploadController@index');
Route::get('yatayupload','App\Http\Controllers\YatayUploadController@index');
Route::get('dersintibakupload','App\Http\Controllers\DersintibakUploadController@index');

Route::get('admin','App\Http\Controllers\AdminController@index');

Route::get('adminlogin','App\Http\Controllers\AdminLoginController@index');
//Route::get('adminKontrol','App\Http\Controllers\AdminLoginController@adminPanel');
//Route::get('giris',[AdminLoginController::class, 'adminPanel'])->name('adminPanel');

Route::get('profil','App\Http\Controllers\ProfilController@index');
Route::get('anasayfa','App\Http\Controllers\AnasayfaController@index');
Route::get('log','App\Http\Controllers\LogController@index');
Route::resource('/img', App\Http\Controllers\ImageController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user','fireauth');


Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify')->middleware('fireauth');

Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

Route::resource('/home/profile', App\Http\Controllers\Auth\ProfileController::class)->middleware('user','fireauth');

Route::resource('/password/reset', App\Http\Controllers\Auth\ResetController::class);

Route::post('generate-yazokulu-pdf', [PDFController::class, 'yazokuluPDF'])->name('yazokuluPDF');

Route::post('generate-cap-pdf', [PDFController::class, 'capPDF'])->name('capPDF');

Route::post('generate-dgs-pdf', [PdfController::class, 'dgsPDF'])->name('dgsPDF');

Route::post('generate-yatay-pdf', [PdfController::class, 'yatayPDF'])->name('yatayPDF');

Route::post('generate-dersintibak-pdf', [PdfController::class, 'dersintibakPDF'])->name('dersintibakPDF');


