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
    // Moving our data array out of the return and into a variable to return:
    $pizzas = [ // This is the data we're sending with the view. 
      // Each key is a variable that can be accessed in the view.
      ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => 10],
      ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 16],
      ['type' => 'veg supreme', 'base' => 'thin & crispy', 'price' => 3]
    ];

    // This is how Laravel gets URL parameters.  If the user now hits ?name=whatever, we can save whatever as the $name variable and present it on the template.
    // $name = request('name');
    // // This is the 2nd parameter variable:
    // $age = request('age);
    // This code gets out-done by the below direct injections. 


    return view( // This is returning a view:
      'pizzas', // 'pizzas' is the view we're returning.
      [
        'pizzas' => $pizzas, // This is the pizzas array data.
        'name' => request('name'), // This is the name URL query parameter. ?name=whatever
        'age' => request('age') // This is the age URL query parameter. ?age=whatever
      ] // This is the data we're sending with. 
    ); // End return
  } // End function
); // End Route::get all

// Setting up a new route for pizzas DETAIL VIEW:
Route::get(
  '/pizzas/{id}', // This is the URL the user hits. {id} is the URL route param. 
  function ($id) { // Passing that variable to the function allows us to use it inside it for a (fake) DB query.  
    return view( // This is returning a view:
      'details', // 'details' is the view we're returning.
      ['id' => $id] // Assigning the $id variable to a key of 'id'. 
    ); // End return
  } // End function
); // End Route::get id

// Route::get( // Clearly a GET route. 
//   '/TestingApp/index', // This is the URL the user will hit. 
//   array('uses' => 'General\TestingAppController@test') // Then this is the file path. 
// );