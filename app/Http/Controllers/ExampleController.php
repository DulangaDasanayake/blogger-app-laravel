<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{

    public function homepage()
    {
        //imagine we loaded data from database
        $ourName = 'dulanga';
        $animals = ['cat','dog','woof'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'Meowsalot']);
    }

    public function aboutpage()
    {
        return '<h1>About page!!!!</h1><A href="/">Back to home</a>';
    }

}
