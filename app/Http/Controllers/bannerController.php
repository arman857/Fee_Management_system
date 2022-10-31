<?php

namespace App\Http\Controllers;
use App\Models\banner;
use Illuminate\Http\Request;

class bannerController extends Controller
{
    
        public function index()
        {
            $banners=banner::paginate(3);
            return view('Backend.banner.banner',compact('banners'));
        }
    
        public function store(Request $request)
        {
            $banners=new banner;
            $banners->Title=$request->Title;
            $banners->Image=$request->Image;
            $banners->Description=$request->Description;
            $banners->Status=$request->Status;
            $banners->save();
            return redirect()->back()->with('success','banner is successfully stored');
            }

            public function delete($id)
            {
                $banners=banner::findOrFail($id);
                $banners->delete();
                return redirect()->back()->with('danger','banner is successfully delete');
            }
     
            public function edit($id)
            {
                $banner=banner::FindOrFail($id);
                return view('Backend.banner.edit',compact('banner'));
            }
    

            
        public function update(Request $request,$id)
        {  
            $banners=banner::FindOrFail($id);
            $banners->Title=$request->Title;
            $banners->Image=$request->Image;
            $banners->Description=$request->Description;
            $banners->Status=$request->Status;
            $banners->save();
            return redirect('banners/details')->with('success','banner is successfully updated');
       }

       public function details($id)
            {
                $banner=banner::FindOrFail($id);
                return view('Backend.banner.details',compact('banner'));
            }
    
}

