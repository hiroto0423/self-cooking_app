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

// Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/meals/create',[MealController::class,'create']);
    Route::post('/meals/create',[MealController::class, 'store']);
// });
require __DIR__.'/auth.php';
