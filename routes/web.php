<?php

use App\Http\Controllers\Site\MainController;
use Illuminate\Support\Facades\Route;

/****************  HOME ***************/
Route::get('/', [MainController::class, 'index'])->name('site.home');


/****************  ABOUT ***************/
Route::get('/sobre', [MainController::class, 'about'])->name('site.about');

/****************  ARTICLES ***************/
Route::get('/Artigos', [MainController::class, 'article'])->name('site.article');

/****************  CONTACT ***************/
Route::get('/Contatos', [MainController::class, 'contact'])->name('site.contact');



require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
