<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    public function list(){
        $depts = Department::all();
        return view('depts.list')->with('depts', $depts);

    }
    public function details(Request $req){
        $d = Department::where('id',$req->id)->first();
        return view('depts.details')->with('d',$d);
    }
}
