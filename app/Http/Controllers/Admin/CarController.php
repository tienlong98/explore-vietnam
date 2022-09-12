<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.car.index', compact('cars'));
    }
    public function add()
    {
        return view('admin.car.add');
    }
    public function insert(Request $request)
    {
        $car = new Car();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/cars/', $filename);
            $car->image = $filename;
        }
        $car->name = $request->input('name');
        $car->price = $request->input('price');
        $car->save();
        return redirect('/cars')->with('status', "Successfully");
    }
    public function edit($id)
    {
        $car = Car::find($id);
        return view('admin.car.edit', compact('car'));
    }
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/cars/' . $car->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/cars/', $filename);
            $car->image = $filename;
        }
        $car->name = $request->input('name');
        $car->price = $request->input('price');
        $car->update();
        return redirect('/cars')->with('status', "Successfully");
    }
    public function destroy($id)
    {
        $car = Car::find($id);
        if ($car->image) {
            $path = 'assets/uploads/hotels/' . $car->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $car->delete();
        return redirect('/cars')->with('status', "Successfully");
    }
}
