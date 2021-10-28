<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
    return view('form');
});

Route::post('SubmitForm',[FormController::class,'SubmitCompleteForm'])->name('submit_compelete_form');
Route::post('Submit',[FormController::class,'SubmitIncompleteForm'])->name('submit_incompelete_form');

Route::get('/test',[FormController::class,'test']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
