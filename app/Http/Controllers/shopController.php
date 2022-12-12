<?php

namespace App\Http\Controllers;

use App\Models\shop;

use App\Models\banner;
use App\Models\service;
use Illuminate\Http\Request;


class shopController extends Controller
{
    public function index()
    {
       
       $banners=banner::all();
       $services=service::all();
    //    dd($services);
        //dd($shops);
        return view('frontend.shop',compact('banners','services'));

    }

    public function service_details($id)
    {
       $service_details=service::FindOrFail($id);
       return view('frontend.service_details',compact('service_details'));
    }
    

    public function massage()
    {
        $shops=shop::all();
        //dd($shops);
        return view('backend.userMassage',compact('shops'));
    }
   
   
     
    public function store(Request $request)
    {
        $validate=$request->validate([
            'Name'=>['required'],
            'Email'=>['required','min:10'],
            'Phone_Number' =>['required'],
            'Massage'=>['required'],
          ]);
        $shops=new shop;
        $shops->Name=$request->Name;
        $shops->Email=$request->Email;
        $shops->Phone_Number=$request->Phone_Number;
        $shops->Massage=$request->Massage;
        $shops->save();
        return redirect()->back()->with('message','Mail is successfully send');
        }
    

    public function delete($id)
    {
        $shops=shop::findOrFail($id);
        $shops->delete();
        return redirect()->back()->with('success','Massage is successfully delete');
    }


}
