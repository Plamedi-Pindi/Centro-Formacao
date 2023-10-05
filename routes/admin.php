<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\CursosController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    /************ DASHBOARD INDEX **********/
    Route::get('/Admindashboard', [AdminController::class, 'index'])->name('admin.index');

    /************ ARTICLES INDEX **********/
    Route::get('admin/artigo', [ArticlesController::class, 'index'])->name('admin.articles');

    /************  CREATE ARTICLES  **********/
    Route::get('admin/novoartigo', [ArticlesController::class, 'create'])->name('admin.newArticles');

    /************  CREATE ARTICLES  **********/
    Route::post('admin/novoartigo', [ArticlesController::class, 'post'])->name('admin.postArticles');



    /************ CURSOS INDEX **********/
    Route::get('user/cursos', [CursosController::class, 'curso'])->name('admin.cursos');
});
