<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardArticleController;
use Illuminate\Support\Facades\Route;

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
    return view('home_rakamin');
});
Route::get('/article', [ArticleController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//dashboard
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/articles', DashboardArticleController::class)->except([
    'show', 'destroy', 'edit', 'update'
])->middleware('auth');

Route::delete('/dashboard/articles/{id}', [DashboardArticleController::class, 'destroy'])->middleware('auth');