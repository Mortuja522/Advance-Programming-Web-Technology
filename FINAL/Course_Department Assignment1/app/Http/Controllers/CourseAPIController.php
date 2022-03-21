<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseAPIController extends Controller
{
    public function getall(){

        return course::all();
    }

    public function add(Request $req){

     try {

        $data = new course();
        $data->name = $req->name;
        $data->course_id = $req->c_id;
   
        if($data->save())
        {
   
           return response()->json(["msg"=>"Added Successfully"],200);
        }

     } 
     catch(\Exception $ex){
        return response()->json(["msg"=>"Could not add"],500);
    }  

}


public function edit(Request $req){

    $data= course::find($req->id);

    $data->name=$req->name;
    $data->course_id=$req->c_id;
    $result=$data->save();
    if($result){
        return ["Result"=>"Data has been updated"];
    }
    else{
        return ["Result"=>"Data updated operation failed"];
    }

}



public function delete($id){


   $data=course::find($id);
   $result=$data->delete();

   if ($result){

    return ["result"=>"record has been deleteted"];
   }

   else{

    return ["result"=>"delte operation faild"];
   }
    
        
}


}
