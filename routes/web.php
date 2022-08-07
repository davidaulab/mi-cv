<?php

use App\Http\Controllers\ContactController;

use App\Http\Controllers\ExpController;
use App\Http\Controllers\TagController;

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
    return view('pages.index');
})->name ('index');

Route::get ('/about', function () { 
    return view ('pages.aboutus');
})->name ('aboutus');

Route::get ('/contact', [ContactController::class, 'create'])->name('contact');
Route::post ('/contact', [ContactController::class, 'store']);


// Experiencias


Route::get ('/experiences', [ExpController::class, 'index'])->name('exps');

Route::get ('/experience', [ExpController::class, 'create'])->name('exps.create');
Route::post ('/experience', [ExpController::class, 'store'])->name('exps.store');


Route::get ('/experience/{exp}', [ExpController::class, 'edit'])->name('exps.edit');
Route::post ('/experience/{exp}', [ExpController::class, 'update'])->name('exps.update');


Route::resource('/tags', TagController::class);
