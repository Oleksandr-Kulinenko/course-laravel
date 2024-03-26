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

Route::prefix('zoopark')->group(function () {
    Route::get('/',
        [
            \App\Http\Controllers\ZooparkController::class,
            'showWelcomePage'
        ]
    )->name('welcome');

    Route::get(
        '/animals',
        [
            \App\Http\Controllers\ZooparkAnimals::class,
            'showAllAnimals'
        ]
    )->name('animals');

    Route::get(
        '/foods',
        [
            \App\Http\Controllers\ZooparkFoods::class,
            'showAllFoods'
        ]
    )->name('foods');

    Route::get(
        '/employees',
        [
            \App\Http\Controllers\ZooparkEmployees::class,
            'showAllEmployees'
        ]
    )->name('employees');
});
