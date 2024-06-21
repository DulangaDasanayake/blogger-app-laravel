<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{

    public function homepage(){
        return '<h1>Homepage!!!!</h1><A href="/about">View about page</a>';
    }

    public function aboutpage(){
        return '<h1>About page!!!!</h1><A href="/">Back to home</a>';
    }

}
