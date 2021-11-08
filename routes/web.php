<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;

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






// Route::get('/test',[FormController::class,'test']);
// Auth::routes();
// Route::group(['middleware' => 'auth'], function () {

// Route::get('new_form',[FormController::class,'index']);
// Route::get('register',[HomeController::class,'register']);
// Route::post('SubmitForm',[FormController::class,'SubmitCompleteForm'])->name('submit_compelete_form');
// Route::post('Submit',[FormController::class,'SubmitIncompleteForm'])->name('submit_incompelete_form');
// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/logout', [HomeController::class, 'logout']);
// Route::get('view_form',[HomeController::class,'formDetail'])->name('view_form');
// });
// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/logout', [HomeController::class, 'logout']);
// Route::get('view_form',[HomeController::class,'formDetail'])->name('view_form');

Auth::routes();

Route::group(['middleware' => 'auth'],function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('new_form',[FormController::class,'index'])->name('new_form');
    Route::post('SubmitForm',[FormController::class,'SubmitCompleteForm'])->name('submit_compelete_form');
    Route::post('Submit',[FormController::class,'SubmitIncompleteForm'])->name('submit_incompelete_form');
    Route::get('view_form/{id}',[FormController::class,'formDetail'])->name('view_form');
    Route::get('editform/{id}',[FormController::class,'edit'])->name('edit_form');
    Route::put('update_form/{id}',[FormController::class,'updateForm'])->name('update_form');
    Route::get('delete_form/{id}',[FormController::class,'deleteForm'])->name('delete_form');
});
