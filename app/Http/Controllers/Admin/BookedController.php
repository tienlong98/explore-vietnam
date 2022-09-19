<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\PaymentConfirm;
use App\Models\BookedTour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookedController extends Controller
{
    public function index()
    {
        $booked = BookedTour::all();
        return view('admin.booked.index', compact('booked'));
    }
    public function view($id)
    {
        $booked = BookedTour::where('id', $id)->first();
        return view('admin.booked.view', compact('booked'));
    }
    public function update(Request $request, $id)
    {
        $booked = BookedTour::find($id);
        $user = User::find($booked->user_id);
        $booked->status = $request->input('status');
        $booked->update();
        Mail::to($user->email)->send(new PaymentConfirm($booked, $user));
        return redirect('booked')->with('status', "Successfully");
    }
}
