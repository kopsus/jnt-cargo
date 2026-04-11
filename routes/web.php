<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/article', function () {
    $articles = Article::latest()->get();
    
    return view('article', compact('articles'));
});
Route::get('/article/{slug}', function ($slug) {
    $article = Article::where('slug', $slug)->firstOrFail();
    return view('article-detail', compact('article'));
});

// RUTE UNTUK CMS ADMIN
Route::prefix('admin')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    // articles
    Route::get('/articles', [ArticleController::class, 'index']); 
    Route::get('/articles/create', [ArticleController::class, 'create']); 
    Route::post('/articles', [ArticleController::class, 'store']);
    Route::get('/articles/{id}/edit', [ArticleController::class, 'edit']); 
    Route::put('/articles/{id}', [ArticleController::class, 'update']); 
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);

    // users
    Route::get('/users', [UserController::class, 'index']); 

});