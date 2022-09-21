<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact()
    {
        return view('form');
    }
    public function insert(Request $request)
    {
        $contacts = new Contact();
        $contacts->name = $request->input('name');
        $contacts->firigana = $request->input('firigana');
        $contacts->email = $request->input('email');
        $contacts->sdt = $request->input('sdt');
        $contacts->content = $request->input('content');
        $contacts->save();
        return redirect('thank')->with('status', "送信しました。");
    }
    public function viewcontact()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }
    public function destroy($id)
    {
        $user = Contact::find($id);
        $user->delete();
        return redirect('/admin-contacts')->with('status', "Successfully");
    }
    public function viewdetail($id)
    {
        $contact = Contact::where('id', $id)->first();
        return view('admin.contacts.view', compact('contact'));
    }
}
