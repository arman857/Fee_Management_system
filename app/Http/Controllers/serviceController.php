<?php

namespace App\Http\Controllers;
use App\Models\service;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function service()
     {
        $services=service::paginate(3);
        return view('Backend.service.service',compact('services'));
    }

    public function store(Request $request)
    {
        $services=new service;
        $services->Title=$request->Title;
        $services->Description=$request->Description;
        $services->Status=$request->Status;
        $services->save();
        return redirect()->back()->with('success','service is successfully stored');
        }

        public function delete($id)
        {
            $services=service::findOrFail($id);
            $services->delete();
            return redirect()->back()->with('danger','Fee is successfully deleted');;
        }

        public function edit($id)
        {
            $service=service::FindOrFail($id);
            return view('Backend.service.edit',compact('service'));
        }

        public function update(Request $request,$id)
        {
            $services=service::findOrFail($id);
            $services->Title=$request->Title;
            $services->Description=$request->Description;
            $services->Status=$request->Status;
            $services->save();
            return redirect('services/details')->with('success','service is successfully stored');
            }


            public function details($id)
        {
            $service=service::FindOrFail($id);
            return view('Backend.service.details',compact('service'));
        }
}