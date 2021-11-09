<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
  // This is our main PizzaController.  Controller's naming convention always follows [DataDescriptor]Controller.  This will contain all of the logic and fake data set that I previously had in my routes (aka web.php) to make it cleaner/leaner and more reusable. 
  // First thing we always do in PHP/Laravel, is make a public function index which we call upon in the route.  This is similar to the 'test' function I made with Brett.  
  public function index()
  {
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
      'pizzas', // 'pizzas.blade.php' is the view we're returning.
      [  // This is the data we're sending with. 
        'pizzas' => $pizzas, // This is the pizzas array data.
        // 'name' => request('name'), // This is the name URL query parameter. ?name=whatever
        // 'age' => request('age') // This is the age URL query parameter. ?age=whatever
      ] // End data array
    ); // End return
  } // End function index

  // These are called actions that use routes:
  public function show($id)
  {
    return view( // This is returning a view:
      'details', // 'details.blade.php' is the view we're returning.
      ['id' => $id] // Assigning the $id variable to a key of 'id'. 
    ); // End return
  }
}
