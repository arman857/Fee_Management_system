<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
        
        $contacts=contact::all();
        return view('backend.contact', compact('contacts'));
    }
     
    public function store(Request $request)
    {
        $contacts=new contact;
        $contacts->Name=$request->Name;
        $contacts->Email=$request->Email;
        $contacts->Phone_Number=$request->Phone_Number;
        $contacts->Massage=$request->Massage;
        $contacts->save();
        return redirect()->back()->with('success','mail is successfully stored');

    }
}
