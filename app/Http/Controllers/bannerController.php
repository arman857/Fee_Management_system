<?php

namespace App\Http\Controllers;
use App\Models\banner;
use Illuminate\Http\Request;

class bannerController extends Controller
{
    
        public function index()
        {
            $banners=banner::paginate(8);
            return view('backend.banner.banner',compact('banners'));
        }
    
        public function store(Request $request)
        {
            $validate=$request->validate([
              'Title'  =>['required'],
              'Image'  =>['required'],
               'Description' =>['required'],
               'short_Description' =>['required'],
            ]);
            $banners=new banner;
            $banners->Title=$request->Title;
            $banners->Image=$request->Image;
            $banners->Description=$request->Description;
            $banners->Status=$request->Status;
            $banners->short_Description=$request->short_Description;

            if($request->hasfile('Image'))
            {
                $image=$request->file('Image')->store('banner','uploads');
                $banners->Image=$image;
            }
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
            $banners->short_description=$request->short_description;
            $banners->save();
            return redirect('banners/details')->with('success','banner is successfully updated');
       }

       public function details($id)
            {
                $banner=banner::FindOrFail($id);
                return view('Backend.banner.details',compact('banner'));
            } 
            
}

