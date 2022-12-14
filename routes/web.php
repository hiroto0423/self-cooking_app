<?php

use App\Http\Controllers\MealController;
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

Route::middleware('auth')->group(function () {
    Route::get('/',[MealController::class,'top']);
    Route::get('/meals',[MealController::class, 'index']);
    Route::get('/meals/search',[MealController::class, 'search']);
    Route::get('/meals/random',[MealController::class,'random']);
    Route::get('/meals/create',[MealController::class,'create']);
    Route::post('/meals/store',[MealController::class, 'store']);
    Route::get('/meals/{meal}',[MealController::class, 'show']);
    Route::get('/meals/{meal}/edit',[MealController::class, 'edit']);
    Route::put('/meals/{meal}/update', [MealController::class, 'update']);
    Route::delete('meals/{meal}/delete',[MealController::class,'delete']);
});
require __DIR__.'/auth.php';
