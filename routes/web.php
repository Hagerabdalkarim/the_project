<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Mail\UserMail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('email', function(){
    return new UserMail();
});

Route::group(
[
'prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('homepage',[Controller::class,'index'])->name('homepage');
Route::get('about',[Controller::class,'about'])->name('about');
Route::get('service',[Controller::class,'service'])->name('service');
Route::get('contactUs',[Controller::class,'contact'])->name('contact');
Route::get('team',[Controller::class,'team'])->name('team');
});