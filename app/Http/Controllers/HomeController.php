<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() //usar invoke cuando solo hay un metodo en la clase
    {
        return view('hello');
    }
}
