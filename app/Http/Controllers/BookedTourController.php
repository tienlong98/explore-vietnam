<?php

namespace App\Http\Controllers;

use App\Models\BookedTour;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookedTourController extends Controller
{
    public function index()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('booked', compact('cartitems'));
    }
    public function bookeditem(Request $request)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $bookeditem = new BookedTour();
            $bookeditem->user_id = $user->id;
            $bookeditem->username = $user->name;
            $bookeditem->tourname = $request->input('tourname');
            $bookeditem->image = $request->input('image');
            $bookeditem->total = $request->input('total');
            $bookeditem->save();
            return redirect('booked')->with('status', "Booked !!!");
        } else {
            return redirect('login');
        }
    }
}
