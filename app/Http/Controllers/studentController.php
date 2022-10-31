<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function infor(){
        $students=student::paginate(3);
        return view('backend.student.infor',compact('students'));
    }

    public function store(request $request)
    {
        $student=new student;
        $student->Name=$request->Name;
        $student->Father_Name=$request->Father_Name;
        $student->Mother_Name=$request->Mother_Name;
        $student->DOB=$request->DOB;
        $student->Class=$request->Class;
        $student->Address=$request->Address;
        $student->Mobile_Number=$request->Mobile_Number;
        $student->save();
        return redirect()->back()->with('success' ,'student is successfully stored');;
    }

    public function delete($id)
    {
        $students=student::findOrFail($id);
        $students->delete();
        return redirect()->back()->with('danger','student is successfully deleted');;
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
        return redirect('student/details')->with('success' ,'student is successfully stored');;
    }

    
    public function detail($id)
    {
        $students=student::FindOrFail($id);
        return view('Backend.student.detail',compact('students'));
    }

}
