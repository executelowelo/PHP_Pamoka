<?php

use App\Http\Controllers\Airport;
use App\Http\Controllers\Views;
use App\Http\Controllers\Airlines;
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

Route::get('/main_page', [Views::class, 'main_page']);

Route::get('/airports', [Views::class, 'airports']);

Route::get('/countries', [Views::class, 'countries']);

Route::get('/airlines', [Views::class, 'airlines']);

Route::get('/add_airport', [Views::class, 'add_airport']);

Route::get('/add_airlines', [Views::class, 'add_airlines']);




Route::post('/add/airport', [Airport::class, 'create']);

Route::post('/add/airlines', [Airlines::class, 'create']);


Route::post('/airlines/delete/{id}', [Airlines::class, 'delete']);

Route::get('/update/airline/{id}', [Views::class, 'update_airline']);

Route::post('/airlines/edit/{id}', [Airlines::class, 'edit']);