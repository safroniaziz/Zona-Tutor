<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
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


Route::group(['prefix'  => '/'],function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    Route::get('/tentang_kami',[FrontendController::class, 'about'])->name('about');
    Route::get('/daftar_kursus',[FrontendController::class, 'course'])->name('course');
    Route::get('/daftar_tutor',[FrontendController::class, 'tutor'])->name('tutor');
    Route::get('/artikel',[FrontendController::class, 'article'])->name('article');
    Route::get('/kontak_kami',[FrontendController::class, 'contact'])->name('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
