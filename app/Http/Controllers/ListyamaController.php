<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListyamaController extends Controller
{
    public function index()
    {
        return view('listyama');
    }
    public function index1()
    {
        return view('listditich');
    }
    public function index2()
    {
        return view('listumi');
    }
    public function sapa()
    {
        return view('sapa');
    }
    public function phuquoc()
    {
        return view('phuquoc');
    }
}
