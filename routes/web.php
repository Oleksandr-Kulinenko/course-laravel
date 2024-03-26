<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZooparkController;
use App\Http\Controllers\ZooparkFoodController;
use App\Http\Controllers\ZooparkEmployeeController;

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

Route::get('/test',
    [
        \App\Http\Controllers\TestController::class,
        'testRequest'
    ]
);

Route::get('/animals',
    [
        \App\Http\Controllers\ZooparkController::class,
        'showAllAnimals'
    ]
);

Route::get(
    'animals/{animal}',
    [\App\Http\Controllers\ZooparkController::class, 'showAnimalInfo']
)->name('animal.info');
