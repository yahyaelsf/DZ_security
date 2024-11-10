<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ImageServiceController;
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

Route::get('/img/{path}', [ImageServiceController::class, 'show'])->where('path', '.*');;
Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/services', [HomeController::class,'services'])->name('services');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');

Route::post('contact_us',[HomeController::class , 'send'])->name('send');

