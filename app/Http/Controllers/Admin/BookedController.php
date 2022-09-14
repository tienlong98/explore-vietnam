<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookedTour;
use Illuminate\Http\Request;

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
        $booked->status = $request->input('status');
        $booked->update();
        return redirect('booked')->with('status', "Successfully");
    }
}
