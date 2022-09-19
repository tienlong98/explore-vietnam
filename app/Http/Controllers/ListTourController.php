<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Hotel;
use App\Models\Rating;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListTourController extends Controller
{
    // public $sorting;
    // public $pagesize;

    public function index(Request $request)
    {
        $tours = Tour::orderBy($request->get('sort', 'id'), $request->get('type', 'desc'))->paginate(9);
        $categories = Category::all();
        $featured_tour = Tour::where('featured', 1)->limit(4)->get();
        $trending_tour = Tour::where('trending', 1)->limit(4)->get();
        return view('listtour', compact('tours', 'categories', 'featured_tour', 'trending_tour',));
    }
    public function detailtour($slug)
    {
        if (Tour::where('slug', $slug)->exists()) {
            $tour = Tour::where('slug', $slug)->first();
            $categories = Category::all();
            $featured_tour = Tour::where('featured', 1)->limit(4)->get();
            $trending_tour = Tour::where('trending', 1)->limit(4)->get();
            $rate = Rating::where('tour_id', $tour->id)->orderBy('created_at', 'DESC')->get();
            $rateAvg = Rating::where('tour_id', $tour->id)->avg('rating_star');
            $hotels = Hotel::where('cate_id', $tour->cate_id)->get();
            $cars = Car::where('cate_id', $tour->cate_id)->get();
            return view('detail', compact('tour', 'rate', 'rateAvg', 'categories', 'featured_tour', 'trending_tour', 'hotels', 'cars'));
        } else {
            return redirect('/')->with('status', 'Slug do not exists');
        }
    }
    public function addrate(Request $req)
    {
        $rating = new Rating();
        $rating->user_id = $req->input('user_id');
        $rating->rating_star = $req->input('rating_star');
        $rating->tour_id = $req->input('tour_id');
        $rating->comment = $req->input('comment');
        $rating->save();
        return redirect()->back();
    }
    public function search(Request $req)
    {
        $search_text = $req->input('query');
        $tour = Tour::where('name', 'LIKE', '%' . $search_text . '%')->get();
        $categories = Category::all();
        $featured_tour = Tour::where('featured', 1)->limit(4)->get();
        $trending_tour = Tour::where('trending', 1)->limit(4)->get();
        return view('search', compact('tour', 'categories', 'featured_tour', 'trending_tour'));
    }
}
