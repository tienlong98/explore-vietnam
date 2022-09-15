<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trending_tour = Tour::where('trending', 1)->limit(4)->get();

        return view('home', compact('trending_tour'));
    }
    public function change_language($locale)
    {

        Session::put('locale', $locale);
        return redirect()->back();
    }
}
