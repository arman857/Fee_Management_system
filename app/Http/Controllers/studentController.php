<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function infor(request $request){

        $search=$request['search']??"";
        if($search !=""){
        $students = student::where('Name','LIKE',"%$search%")->get();
        }else{
          
        $students=student::all();
        }


        return view('backend.student.infor',compact('students'));
    }

    public function store(request $request)
    {
        $validate=$request->validate([
            'Name'=>['required'],
            'Father_Name'=>['required'],
            'Mother_Name'=>['required'],
            'DOB'=>['required'],
            'Class' =>['required'],
            'Address'=>['required'],
            'Mobile_Number' =>['required'],
          ]);

        $student=new student;
        $student->Name=$request->Name;
        $student->Father_Name=$request->Father_Name;
        $student->Mother_Name=$request->Mother_Name;
        $student->DOB=$request->DOB;
        $student->Class=$request->Class;
        $student->Address=$request->Address;
        $student->Mobile_Number=$request->Mobile_Number;
        $student->save();
        return redirect()->back()->with('message' ,'student is successfully stored');;
    }

    public function delete($id)
    {
        $students=student::findOrFail($id);
        $students->delete();
        return redirect()->back()->with('success','student is successfully deleted');;
    }

    
    public function edit($id)
    {
        $student=student::FindOrFail($id);
        return view('Backend.student.edit',compact('student'));
    }


    public function update(request $request,$id)
    {
        $student=student::findOrFail($id);
        $student->Name=$request->Name;
        $student->Father_Name=$request->Father_Name;
        $student->Mother_Name=$request->Mother_Name;
        $student->DOB=$request->DOB;
        $student->Class=$request->Class;
        $student->Address=$request->Address;
        $student->Mobile_Number=$request->Mobile_Number;
        $student->save();
        return redirect('student/details')->with('message' ,'student is successfully stored');;
    }

    
    public function detail($id)
    {
        $students=student::FindOrFail($id);
        return view('Backend.student.detail',compact('students'));
    }

}
