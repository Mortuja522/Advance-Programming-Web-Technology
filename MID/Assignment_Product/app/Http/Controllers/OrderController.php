<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\product;

class OrderController extends Controller
{
    //

    public function cart(Request $request,$id){
        $data= product::where('id','=',$id)
        ->first();
        
        $request->session()->push('cart', $data);

    }

    public function showcart(Request $request){

        $data = $request->session()->all();
        
        return view('customer.cart')
        ->with('data',$data);
    }
}
