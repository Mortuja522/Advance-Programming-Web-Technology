<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;

class DepartmentAPIController extends Controller
{
    public function getall(){

        return department::all();
    }

    public function add(Request $req){

        try {
   
           $data = new department();
           $data->name = $req->name;
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
   
       $data= department::find($req->id);
   
       $data->name=$req->name;
       $result=$data->save();
       if($result){
           return ["Result"=>"Data has been updated"];
       }
       else{
           return ["Result"=>"Data updated operation failed"];
       }
   
   }
   
   
   
   public function delete($id){
   
   
      $data=department::find($id);
      $result=$data->delete();
   
      if ($result){
   
       return ["result"=>"record has been deleteted"];
      }
   
      else{
   
       return ["result"=>"delte operation faild"];
      }
       
           
   }


}

