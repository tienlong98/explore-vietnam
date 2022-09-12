<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('admin.hotel.index', compact('hotels'));
    }
    public function add()
    {
        return view('admin.hotel.add');
    }
    public function insert(Request $request)
    {
        $hotel = new Hotel();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/hotels/', $filename);
            $hotel->image = $filename;
        }
        $hotel->name = $request->input('name');
        $hotel->price = $request->input('price');
        $hotel->save();
        return redirect('/hotels')->with('status', "Successfully");
    }
    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('admin.hotel.edit', compact('hotel'));
    }
    public function update(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/hotels/' . $hotel->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/hotels/', $filename);
            $hotel->image = $filename;
        }
        $hotel->name = $request->input('name');
        $hotel->price = $request->input('price');
        $hotel->update();
        return redirect('/categories')->with('status', "Successfully");
    }
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        if ($hotel->image) {
            $path = 'assets/uploads/hotels/' . $hotel->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $hotel->delete();
        return redirect('/hotels')->with('status', "Successfully");
    }
}
