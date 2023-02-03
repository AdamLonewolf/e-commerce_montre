<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VignetteController;
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

Route::get('/', [VignetteController::class, "index"])->name('accueil');
Route::get('/Voir_montre/{id}', [VignetteController::class, "show"])->name('Voir_article');
Route::get('/categorie/{id}', [CategoryController::class, "show"])->name('Voir_categorie_produit');

// Route::get('/', function () {
//       return view('child.vignette');
//   });

// Route::get('/about', function () {
//     return view('child.about');
// });


 


