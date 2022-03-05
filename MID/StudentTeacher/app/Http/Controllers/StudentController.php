<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function create(){
        return view('student.create');
    }

    public function createSubmit(Request $req){
        $req->validate(
            [
                'name'=>'required',
                'id'=>'required',
                'dept'=>'required',
                'cgpa'=>'required'

            ],
            [
                'name.required'=>'Required',
                'id.required'=>'Required',
                'dept.required'=>'Required',
                'cgpa.required'=>'Required',

            ]
        );
        $st =new Student();
        $st->name=$req->name;
        $st->uid=$req->id;
        $st->dept_id=$req->dept;
        $st->cgpa=$req->cgpa;
        $st->save();

        return redirect()->route('list');

    }

    public function list(){
        $st=Student::all();
        return view('student.list')
        ->with('st',$st);
    }

    public function details(Request $req){
        $st=Student::where('id','=',($req->id))
        ->select('name','uid','dept_id','cgpa')
        ->first();
        return view('student.get')
        ->with('st',$st);
    }
}
