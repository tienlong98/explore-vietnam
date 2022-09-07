<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tour;
use Illuminate\Http\Request;

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
            return view('detail', compact('tour'));
        } else {
            return redirect('/')->with('status', 'Slug do not exists');
        }
    }
    // public function sort()
    // {
    //     $this->sorting = "default";
    //     $this->pagesize = 9;
    //     if ($this->sorting == 'date') {
    //         $tours = Tour::orderBy('created_at', 'DESC')->paginate($this->pagesize);
    //     } elseif ($this->sorting == 'price') {
    //         $tours = Tour::orderBy('regular_price', 'ASC')->paginate($this->pagesize);
    //     } elseif ($this->sorting == 'featured') {
    //         $tours = Tour::orderBy('featured',1)->paginate($this->pagesize);
    //     } elseif ($this->sorting == 'price-desc') {
    //         $tours = Tour::orderBy('regular_price', 'DESC')->paginate($this->pagesize);
    //     }
    //     return view('listtour',compact('tours'));
    // }
}
