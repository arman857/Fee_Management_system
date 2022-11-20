<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index()
    {
        $settings=setting::all();
        // dd($settings);
        return view('Backend.setting',compact('settings'));
    }


      public function store(request $request)
      {
        $settings=new setting;
        $settings->Company_Name=$request->Company_Name;
        $settings->Logo=$request->Logo;
        $settings->Email=$request->Email;
        $settings->Phone=$request->Phone;
        $settings->Description=$request->Description;
        $settings->Facebook_Link=$request->Facebook_Link;
        $settings->Google_Link=$request->Google_Link;
        $settings->Youtube_Link=$request->Youtube_Link;
        $settings->save();
        return redirect(route('index'));
      }

      public function delete($id)
      {
        $settings=setting::findOrFail($id);
        $settings->delete();
        return redirect(route('index'))->with('danger','setting is delete successfully');
      }

    
      
      public function edit($id)
      {
        $setting=setting::findOrfail($id);
        return view('Backend.edit');
      }

      public function update(Request $request,$id)
      {
        $settings=setting::findOrFail($id);
        $settings->Company_Name=$request->Company_Name;
        $settings->Logo=$request->Logo;
        $settings->Email=$request->Email;
        $settings->Phone=$request->Phone;
        $settings->Description=$request->Description;
        $settings->Facebook_Link=$request->Facebook_Link;
        $settings->Google_Link=$request->Google_Link;
        $settings->Youtube_Link=$request->Youtube_Link;
        $settings->save();
        return redirect(route('index'))->with('primary','update is success fully');
      }
} 
