<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\IngredientController;
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

//FRONT 
Route::get('/', [AllController::class, 'home'])->name('home');

//BACK
Route::get('/admin', function(){
    return view('admin.dashboard');
})->name('admin');

//Crud ingrédient
    //read/index
Route::get('/admin/ingre', [IngredientController::class, 'index'])->name('ingre.index');

    //create
Route::get('/admin/ingre/create', [IngredientController::class, 'create'])->name('ingre.create');
Route::post('/admin/ingre/store', [IngredientController::class, 'store'])->name('ingre.store');

    //delete
Route::delete('/admin/ingre/{id}/delete', [IngredientController::class, 'destroy'])->name('ingre.destroy');

    //show
Route::get('/admin/ingre/{id}', [IngredientController::class, 'show'])->name('ingre.show');
