<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class travelTipsController extends Controller
{
    public function alert(){
        return view('alert');
    }

    public function safety(){
        return view('safety');
    }
}
