<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $people = ['Priscilla', 'David', 'Savage', 'Gideon', 'Mimi'];
        return view('people', ['people' => $people]);
    }

    public function contacts()
    {
        return "<h1>This is a contacts page</h1>";
    }
}
