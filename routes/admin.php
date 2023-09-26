<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CursosController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function(){

    Route::get('/Admindashboard', [AdminController::class, 'index'])->name('admin.index');

     Route::get('user/cursos', [CursosController::class, 'curso'])->name('admin.cursos');

     
});




