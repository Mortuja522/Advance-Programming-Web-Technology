<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function show(){
        $courses = array();
        $course=array(
            "Course"=>"Programming With Python",
            "Instructor"=> "Mr. David",
            "Duration"=> "4 Months",
            "Starts"=> "10th February 2022",

        );

        $course=(object) $course;
        $courses[] = $course;
        
        $course=array(
            "Course"=>"Programming With C#",
            "Instructor"=> "Mr. X",
            "Duration"=> "2 Months",
            "Starts"=> "5th February 2022",

        );
        $course=(object) $course;
        $courses[] = $course;

        $course=array(
            "Course"=>"Programming With JAVA",
            "Instructor"=> "Mr. Java",
            "Duration"=> "2.5 Months",
            "Starts"=> "2th February 2022",

        );
        $course=(object) $course;
        $courses[] = $course;

        return view('home.show')
        ->with ('course', $courses);
    }

    public function contacts(){
        $contact=array(
            "Name"=>"Tanvir Ahmed",
            "Position"=>"Developer",
            "Email"=>"t.a@st.edu",
        );
        $contact=(object) $contact;
        $contacts[] = $contact;

        $contact=array(
            "Name"=>"Rayhan Uddin",
            "Position"=>"Co-ordinator",
            "Email"=>"r.u@st.edu",
        );
        $contact=(object) $contact;
        $contacts[] = $contact;

        $contact=array(
            "Name"=>"Mushfiq Rahman",
            "Position"=>" Manager",
            "Email"=>"ms@st.edu", 
        );
        $contact=(object) $contact;
        $contacts[] = $contact; 
        

        $contacts=(object) $contacts;
        return view('home.contact')
        ->with ('contact', $contacts);
    }

    public function login(){
        return view('home.login');
    }

    public function student(){
        return view('student.index');
    }

    public function admin(){
        return view('admin.index');
    }
}
