<?php

use App\Http\Controllers\CarsController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('/');
});
Auth::routes();

Route::middleware ('auth') -> group (function () {

Route::get('/', [CarsController::class, 'index']);

Route::get('/cars/{cars}', [CarsController::class, 'show']);
Route::delete('/cars/{cars}/', [CarsController::class, 'destroy']);

Route::get('/cars/', [CarsController::class, 'create']);
Route::post('/cars/', [CarsController::class, 'store']);

Route::get('/cars/{cars}/edit', [CarsController::class, 'edit']);
Route::patch('/cars/{cars}', [CarsController::class, 'update']);

});
