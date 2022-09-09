<?php

namespace App\Http\Controllers;

use App\Models\BookedTour;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookedTourController extends Controller
{

    public function bookeditem(Request $request)
    {
        if (Auth::id()) {
            $bookeditem = new BookedTour();
            $bookeditem->user_id = $request->input('user_id');
            $bookeditem->username = $request->input('user_name');
            $bookeditem->tourname = $request->input('tourname');
            $bookeditem->pp_number = $request->input('pp_number');
            $bookeditem->de_date = $request->input('de_date');
            $bookeditem->image = $request->input('image');
            $bookeditem->total = $request->input('total');
            $bookeditem->save();
            return redirect('booked')->with('status', "Booked !!!");
        } else {
            return redirect('login');
        }
    }
    public function showbooked()
    {
        $bookeditem = BookedTour::where('user_id', Auth::id())->get();
        return view('booked', compact('bookeditem'));
    }
}
