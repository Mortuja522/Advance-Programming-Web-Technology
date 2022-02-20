<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use App\Models\customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    //
    public function login(){
        return view('customer.login');
    }

    public function loginsubmit(Request $req){
        $req->validate([
            'phone'=>'required',
            'password'=>'required'
        ],
    [
        'phone.required'=>'Enter Phone Number',
        'password.required'=>'Enter password'
    ]);
    $c= customer::where('phone','=', $req->phone)->first();
    if($c){
        if($req->password===$c->password){
            $req->session()->put('CusId',$c->c_id);
            return redirect()->route('show'); 
        }
        else{
            return "Password Does't Match";
        }
    }
    else{
        return "Phone Doesn't Match";
    }
    }

    public function register(){
        return view('customer.register');
    }

    public function registersubmit(Request $req){
        $req->validate([
            'name'=>'required|regex:/^[A-Z a-z]+$/',
            'phone'=>'required|min:11|max:15',
            'password'=>'required|min:5|max:8',
            'con_pass'=>'required|same:password|min:5|max:8'
        ],
        [
            'name.required'=>'Name required',
            'phone.required'=>'Phone required',
            'password.required'=>'Password Required',
            'con_pass.required'=>'Password Required'
        ]
    );
    //data-> DB
    $cs= new customer();
    $cs->name=$req->name;
    $cs->phone=$req->phone;
    $cs->password=$req->password;
    $cs->save();
    
    return redirect()->route('login');
    }
}
