<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class show extends Controller
{
    //
    public function home()
    {
$data =['welcome'];
    return view('home', ["data"=> $data]); //
    }

    public function about()
    {

    return view('about'); //
    }
}
