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
  function () {
    return view( // This is returning a view:
      'pizzas', // 'pizzas' is the view we're returning.
      [ // This is the data we're sending with the view. 
        // Each key is a variable that can be accessed in the view.
        'type' => 'hawaiian'
      ] 
    );
    // return 'pizzas';
    // return ['name' => 'veg pizzas', 'base' => 'classic'];
  }
);

// Route::get( // Clearly a GET route. 
//   '/TestingApp/index', // This is the URL the user will hit. 
//   array('uses' => 'General\TestingAppController@test') // Then this is the file path. 
// );