<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettingRequest;
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


      public function store(StoreSettingRequest $request)
      {
        $destinationpath = 'uploads/settings/';
        $data = $request->except('Logo');
      // dd($data);
        $imageFile = $request->Logo;
        if ($imageFile) {
          $extension = strrchr($imageFile->getClientOriginalName(), '.');
          $new_file_name = "setting_" . time();
          $attachment = $imageFile->move($destinationpath, $new_file_name . $extension);
          $data['Logo'] = isset($attachment) ? $new_file_name . $extension : NULL;
      }
      // dd($data);
      $setting = setting::create($data);
      if ($setting) {
        return redirect()->route('index')
        ->with('message','setting is successfully store');
      }

      return redirect()->back()
          ->withInput()
          ->with('message','Error');
      
      }

      public function delete($id)
      {
        $settings=setting::findOrFail($id);
        $settings->delete();
        return redirect(route('index'))->with('success','setting is delete successfully');
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
        $settings->Twitter_Link=$request->Twitter_Link;
        $settings->Instagram_Link=$request->Instagram_Link;
        $settings->Linkedin_Link=$request->Linkedin_Link;
        $settings->save();
        return redirect(route('index'))->with('primary','update is success fully');
      }
} 
