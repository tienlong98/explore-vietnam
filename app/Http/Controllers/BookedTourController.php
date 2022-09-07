<?php

namespace App\Http\Controllers;

use App\Models\BookedTour;
use App\Models\Cart;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookedTourController extends Controller
{
    public function index()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('booked', compact('cartitems'));
    }
}
