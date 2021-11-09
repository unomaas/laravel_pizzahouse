<?php

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

Route::get(
  '/',
  function () {
    return view('welcome');
  }
);

// Setting up a new route for pizzas: 
Route::get(
  '/pizzas', // This is the URL the user hits. 
  'App\Http\Controllers\PizzaController@index' // This references the PizzaController public function index.
); // End Route::get all

// Setting up a new route for pizzas DETAIL VIEW:
Route::get(
  '/pizzas/{id}', // This is the URL the user hits. {id} is the URL route param. 
  'App\Http\Controllers\PizzaController@show' // This references the PizzaController public function show.  Apparently in Laravel 8, you need to do full pathing.
); // End Route::get id

// Route::get( // Clearly a GET route. 
//   '/TestingApp/index', // This is the URL the user will hit. 
//   array('uses' => 'General\TestingAppController@test') // Then this is the file path. 
// );