<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;

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

//CATEGORIE
Route::get('/listeCategories', [CategorieController::class,'index']);
Route::get('/AjoutCategorie', [CategorieController::class,'create']);
Route::post('/AjouterCategorie', [CategorieController::class,'store']);

//ARTICLE
Route::get('/listeArticles', [ArticleController::class,'index']);
Route::get('/AjoutArticle', [ArticleController::class,'create']);
Route::post('/AjouterArticle', [ArticleController::class,'store']);
