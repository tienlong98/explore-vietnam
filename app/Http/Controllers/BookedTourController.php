<?php

namespace App\Http\Controllers;

use App\Models\BookedTour;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookedTourController extends Controller
{

    public function bookeditem(Request $request)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $bookeditem = new BookedTour();
            $bookeditem->user_id = $user->id;
            $bookeditem->username = $user->name;
            $bookeditem->tourname = $request->input('tourname');
            $bookeditem->pp_number = $request->input('pp_number');
            $bookeditem->de_date = $request->input('de_date');
            $bookeditem->image = $request->input('image');
            $bookeditem->hotel = $request->input('hotel_id');
            $bookeditem->car = $request->input('car_id');
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
