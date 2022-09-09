<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rating;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListTourController extends Controller
{
    // public $sorting;
    // public $pagesize;

    public function index()
    {
        $tours = Tour::paginate(9);
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
            return view('detail', compact('tour', 'rate','rateAvg', 'categories', 'featured_tour', 'trending_tour'));
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
}