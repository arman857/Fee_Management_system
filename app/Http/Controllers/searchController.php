<?php

namespace App\Http\Controllers;

use App\Models\search;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function allstudent(request $request)
    {
        if($request->ajax()){
           $data= search::where('name','LIKE',$request->name.'%')->get();
           $output='';
           if(count($data) >0){
            $output ='<ul class="list-group" style="display:block;position:relative;z-index:1">';
            foreach($data as $row){
                $output .='<li "list-group-item">' .$row->name.'</li>';
            }
            $output .='</ul>';
           }
           else{
            $output  .='<li class="list-group-item">no data found</li>';
           }
           
        }
        return view( 'Backend.search');
    }
}
