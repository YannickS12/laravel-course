<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World !';
});

// GET /articles : Consultation de tous les articles
Route::get('/articles', [ArticleController::class, 'index']);

// GET /articles/{id}  Consulter l'article précisé par l'id
// La méthode du controller s'appellera show($id)
Route::get('/articles/{id}', [ArticleController::class, 'show']);

