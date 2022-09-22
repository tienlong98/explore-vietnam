<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();

        return view('admin.tour.index', compact('tours'));
    }
    public function add()
    {
        $category = Category::all();
        return view('admin.tour.add', compact('category'));
    }
    public function insert(Request $request)
    {
        $tour = new Tour();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/tours/', $filename);
            $tour->image = $filename;
        }
        $tour->name = $request->input('name');
        $tour->slug = $request->input('slug');
        $tour->cate_id = $request->input('cate_id');
        $tour->short_descripsition = $request->input('short_descripsition');
        $tour->descripsition = $request->input('descripsition');
        $tour->regular_price = $request->input('regular_price');
        $tour->sale_price = $request->input('sale_price');
        $tour->qty = $request->input('qty');
        // $tour->tax = $request->input('tax');
        $tour->featured = $request->input('featured') == FALSE ? '0' : '1';
        $tour->trending = $request->input('trending') == FALSE ? '0' : '1';
        $tour->save();
        return redirect('/tours')->with('status', "Successfully");
    }
    public function uploadimage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/tours/', $filename);
            $url = asset('assets/uploads/tours/' . $filename);
            return response()->json([
                'filename' => $filename,
                'uploaded' => 1,
                'url' => $url,
            ]);
        }
    }

    public function edit($id)
    {
        $tour = Tour::find($id);
        $category = Category::all();
        return view('admin.tour.edit', compact('tour', 'category'));
    }
    public function update(Request $request, $id)
    {
        $tour = Tour::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/tours/' . $tour->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category/', $filename);
            $tour->image = $filename;
        }
        $tour->name = $request->input('name');
        $tour->slug = $request->input('slug');
        $tour->cate_id = $request->input('cate_id');
        $tour->short_descripsition = $request->input('short_descripsition');
        $tour->descripsition = $request->input('descripsition');
        $tour->regular_price = $request->input('regular_price');
        $tour->sale_price = $request->input('sale_price');
        $tour->qty = $request->input('qty');
        // $tour->tax = $request->input('tax');
        $tour->featured = $request->input('featured') == FALSE ? '0' : '1';
        $tour->trending = $request->input('trending') == FALSE ? '0' : '1';
        $tour->update();
        return redirect('/tours')->with('status', "Successfully");
    }
    public function destroy($id)
    {
        $tour = Tour::find($id);
        if ($tour->image) {
            $path = 'assets/uploads/tours/' . $tour->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $tour->delete();
        return redirect('/tours')->with('status', "Successfully");
    }
}
