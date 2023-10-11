<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlunoController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\CursosController;
use App\Http\Controllers\Admin\FormadorController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    /************ DASHBOARD INDEX **********/
    Route::get('/Admindashboard', [AdminController::class, 'index'])->name('admin.index');

    /************ ARTICLES INDEX **********/
    Route::get('admin/artigo', [ArticlesController::class, 'index'])->name('admin.articles');

    /************  CREATE ARTICLES  **********/
    Route::get('admin/novoartigo', [ArticlesController::class, 'create'])->name('admin.newArticles');

    /************  CREATE ARTICLES  **********/
    Route::post('admin/novoartigo', [ArticlesController::class, 'store'])->name('admin.postArticles');

    /************  DOWNLOAD ARTICLES  **********/
    Route::post('admin/download/{file}', [ArticlesController::class, 'download'])->name('admin.download.articles');

    /************  DELETE ARTICLES  **********/
    Route::get('admin/eliminar/{file}', [ArticlesController::class, 'destroy'])->name('admin.delete.articles');

    /************  UPDATE ARTICLES  **********/
    Route::get('admin/editar/{file}', [ArticlesController::class, 'updateView'])->name('admin.update.articlesView');

    /************  UPDATE ARTICLES  **********/
    Route::post('admin/editar/{file}', [ArticlesController::class, 'update'])->name('admin.update.articles');



    /************ CURSOS INDEX **********/
    Route::get('user/cursos', [CursosController::class, 'curso'])->name('admin.cursos');



    /************ ALUNOS LIST **********/
    Route::get('admin/alunos', [AlunoController::class, 'index'])->name('admin.alunos');

    /************ NEW ALUNOS **********/
    Route::get('admin/novoaluno', [AlunoController::class, 'create'])->name('admin.novoaluno');

    Route::post('admin/novoaluno', [AlunoController::class, 'store'])->name('admin.novoaluno.post');

    /************ ELIMINAR UM ALUNO **********/
    Route::get('admin/eliminaraluno/{id}', [AlunoController::class, 'destroy'])->name('admin.eliminaraluno');

    /************ EDITAR UM ALUNO **********/
    Route::get('admin/editaraluno/{id}', [AlunoController::class, 'edit'])->name('admin.editaraluno');

    Route::post('admin/editaraluno/{id}', [AlunoController::class, 'update'])->name('admin.atualizaraluno');




    /************ NEW FORMADOR **********/
    Route::get('admin/formadores', [FormadorController::class, 'index'])->name('admin.formadores');

    /************ NEW FORMADOR **********/
    Route::get('admin/novoformador', [FormadorController::class, 'create'])->name('admin.novoformador');

    Route::post('admin/novoformador', [FormadorController::class, 'store'])->name('admin.novoformador.post');


    /************ ELIMINAR UM FORMADOR **********/
    Route::get('admin/eliminarformador/{id}', [FormadorController::class, 'destroy'])->name('admin.eliminarformador');

    /************ EDITAR UM ALUNO **********/
    Route::get('admin/editarformador/{id}', [FormadorController::class, 'edit'])->name('admin.editarformador');

    Route::post('admin/editarformador/{id}', [FormadorController::class, 'update'])->name('admin.atualizarformador');



});
