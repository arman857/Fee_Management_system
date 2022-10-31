<?php

namespace App\Http\Controllers;

use App\Models\fee;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function index()
    {
        $fees=Fee::paginate(3);
        return view('Backend.fee.index',compact('fees'));
    }

    public function store(Request $request)
    {
        $fees=new Fee;
        $fees->date=$request->date;
        $fees->student_name=$request->student_name;
        $fees->amount=$request->amount;
        $fees->payment_method=$request->payment_method;
        $fees->status=$request->status;
        $fees->comment=$request->comment;
        $fees->save();
        return redirect()->back()->with('success','Fee is successfully stored');
        }

        public function delete($id)
        {
            $fees=fee::findOrFail($id);
            $fees->delete();
            return redirect()->back()->with('danger','Fee is successfully deleted');;
        }

        public function edit($id)
        {
            $fee=Fee::FindOrFail($id);
            return view('Backend.fee.edit',compact('fee'));
        }

        public function update(Request $request,$id)
        {  
            $fees=Fee::FindOrFail($id);
            $fees->date=$request->date;
            $fees->student_name=$request->student_name;
            $fees->amount=$request->amount;
            $fees->payment_method=$request->payment_method;
            $fees->status=$request->status;
            $fees->comment=$request->comment;
            $fees->save();
            return redirect('fee/details')->with('success','Fee is successfully updated');
       }
    
       
       public function details($id)
       {
           $fees=Fee::FindOrFail($id);
           return view('Backend.fee.details',compact('fees'));
       }
   
}
