<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home(){
      return view('home.index');
  }

  public function login(){
      return view('home.login');
  }

  public function loginSubmit(Request $req){
    $this->validate($req,
            [
                
                'uname'=>'required',
                'password'=>'required',
                'conf_password'=>'required|same:password',
                
            ],
            [
                'uname.required'=>'Please provide your username',
                'password'=>'Password Required'
            ]
    
        );
        //return redirect()->route('/');
        return view('home.index');
    }
  
}
