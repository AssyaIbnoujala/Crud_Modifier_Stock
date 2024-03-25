<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles', ArticleController::class);
Route::get('/Article', [ArticleController::class, 'index']);
Route::get('/stock', [ArticleController::class, 'update_article']);
Route::get('/update', [ArticleController::class, 'update_article']);
Route::post('/modifierArticle', [ArticleController::class, 'modifyArticle']);
Route::get('/delete/{id}',[ArticleController::class,'delete_article'])->name('articles.delete');
Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::post('/store', [ArticleController::class, 'store'])->name('store');













// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('articles', ArticleController::class);
// // Route::get('/articles', [ArticleController::class, 'index']);
// Route::get('/Article', [ArticleController::class, 'index']);
// Route::get('/stock', [ArticleController::class, 'update_article']);
// Route::get('/update', [ArticleController::class, 'update_article']);


// Route::post('/modifierArticle', [ArticleController::class, 'modifyArticle']);
// Route::get('/delete/{id}', [ArticleController::class, 'delete_article'])->name('articles.delete');
// // Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
// Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');
// Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');