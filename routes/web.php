<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
// Route::fallback(function(){
//  return redirect('homePage');
// });


Auth::routes();


Route::middleware('auth')->group(function () {

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('homePage', function(){
    return view('homePage');
})->name('homePage');

Route::get('about', function(){
    return view('about');
})->name('about');

Route::get('service', function(){
    return view('service');
})->name('service');

Route::get('guards', function(){
    return view('team');
})->name('team');

Route::get('contactUs', function(){
    return view('contact');
})->name('contact');
});