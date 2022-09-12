<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function user()
    {
        $users = User::where('role_as', 0)->get();
        return view('admin.user.index', compact('users'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users')->with('status', "Successfully");
    }
}
