<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\Voucher;

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
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// RUTE UNTUK CMS ADMIN (Sekarang SEMUA dilindungi password)
Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        $totalArticles = Article::count();
        $totalVouchers = Voucher::count();
        $totalUsers = User::count();

        return view('admin.dashboard', compact('totalArticles', 'totalVouchers', 'totalUsers'));
    })->name('admin.dashboard');

    // Articles
    Route::get('/articles', [ArticleController::class, 'index']);
    Route::get('/articles/create', [ArticleController::class, 'create']);
    Route::post('/articles', [ArticleController::class, 'store']);
    Route::get('/articles/{id}/edit', [ArticleController::class, 'edit']);
    Route::put('/articles/{id}', [ArticleController::class, 'update']);
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);

    // Vouchers
    Route::get('/vouchers', [App\Http\Controllers\VoucherController::class, 'index']);
    Route::get('/vouchers/create', [App\Http\Controllers\VoucherController::class, 'create']);
    Route::post('/vouchers', [App\Http\Controllers\VoucherController::class, 'store']);
    Route::get('/vouchers/{id}/edit', [App\Http\Controllers\VoucherController::class, 'edit']);
    Route::put('/vouchers/{id}', [App\Http\Controllers\VoucherController::class, 'update']);
    Route::delete('/vouchers/{id}', [App\Http\Controllers\VoucherController::class, 'destroy']);

    // Users (Menggunakan Resource Route)
    Route::resource('users', UserController::class)->except(['show'])->names('admin.users');
});
