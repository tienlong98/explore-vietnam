<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class travelTipsController extends Controller
{
    public function transport(){
        return view('transport');
    }

    public function safety(){
        return view('safety');
    }
    public function weather(){
        return view('weather');
    }
}