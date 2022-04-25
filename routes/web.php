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

Route::get('/',[\App\Http\Controllers\Client\homeController::class,'index'])->name('indexPage');

Route::get('/dashboard', function () {
    return view('admin.old');
})->middleware(['auth'])->name('dashboard');

Route::resource('/dashboard/users',\App\Http\Controllers\administrator\userController::class)->middleware(['auth','admin']);
Route::resource('/dashboard/topheader',\App\Http\Controllers\administrator\TopHeaderController::class)->middleware(['auth','admin']);
Route::resource('/dashboard/hero',\App\Http\Controllers\administrator\heroController::class)->middleware(['auth','admin']);

require __DIR__.'/auth.php';
