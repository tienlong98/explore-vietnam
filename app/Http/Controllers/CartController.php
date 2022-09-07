<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CartController extends Controller
{
    public function addcart(Request $request, $id)
    {

        if (Auth::id()) {
            $user = Auth::user();
            $tour = Tour::find($id);
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->price = $tour->regular_price;
            $cart->name = $tour->name;
            $cart->de_date = $request->input('dd_date');
            $cart->pp_number = $request->input('pp_number');
            $cart->image = $tour->image;
            $cart->subtotal = $cart->price * $cart->pp_number;
            $cart->tax = $cart->subtotal / 100 * 10;
            $cart->total = $cart->subtotal + $cart->tax;
            $cart->save();
            return redirect('view-cart')->with('status', "Added to Cart");
        } else {
            return redirect('login');
        }
    }
    public function index()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('cart', compact('cartitems'));
    }
    public function delete($id)
    {
        $data = Cart::find($id);
        if ($data->image) {
            $path = 'assets/uploads/category/' . $data->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $data->delete();
        return redirect('/view-cart')->with('status', "Successfully");
    }
    public function submit()
    {
        return view('thank');
    }
}
