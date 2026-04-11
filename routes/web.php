<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Article; 
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// RUTE HALAMAN UTAMA (LANDING PAGE)
Route::get('/', function () {
    return view('welcome');
});

// Route Login
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// RUTE DAFTAR ARTIKEL 
Route::get('/article', function () {
    $articles = Article::latest()->get();
    return view('article', compact('articles'));
});

// RUTE DETAIL ARTIKEL 
Route::get('/article/{slug}', function ($slug) {
    $article = Article::where('slug', $slug)->firstOrFail();
    return view('article-detail', compact('article'));
});

// RUTE UNTUK CMS ADMIN 
Route::middleware('auth')->prefix('admin')->group(function () {
    
    Route::get('/dashboard', function () { return view('admin.dashboard'); });

    // CRUD Artikel
    Route::get('/articles', [ArticleController::class, 'index']);
    Route::get('/articles/create', [ArticleController::class, 'create']);
    Route::post('/articles', [ArticleController::class, 'store']);
    Route::get('/articles/{id}/edit', [ArticleController::class, 'edit']);
    Route::put('/articles/{id}', [ArticleController::class, 'update']);
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);

    // CRUD User Admin
    Route::resource('users', UserController::class);
});