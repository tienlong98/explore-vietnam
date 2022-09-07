<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tour;
use Illuminate\Http\Request;

class UserCategoryController extends Controller
{
    public function index($slug)
    {
        if (Category::where('slug', $slug)->exists()) {
            $category = Category::where('slug', $slug)->first();
            $categories = Category::all();
            $tours = Tour::where('cate_id', $category->id)->paginate(9);
            $featured_tour = Tour::where('featured', 1)->limit(4)->get();
            $trending_tour = Tour::where('trending', 1)->limit(4)->get();
            return view('usercategory', compact('category','categories', 'tours', 'featured_tour', 'trending_tour'));
        } else {
            return redirect('/')->with('status', 'Slug do not exists');
        }
    }
}
