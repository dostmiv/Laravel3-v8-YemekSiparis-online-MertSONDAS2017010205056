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

Route::get('/', function () {
    return view('home.index');
});
Route::get('/test',function (){
    return view('layouts.bootstraptest');
});

Route::get('/blognice',function (){
    return view('layouts.blognice');
});


Route::get('/about',[HomeController::class,'about'])->name('about');


Route::get('/layouthome',function (){
    return view('layouts.home');
});
Route::get('/mesela',function (){
    return view('layouts.mesela');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
