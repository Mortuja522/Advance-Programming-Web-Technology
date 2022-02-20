<?php

namespace App\Http\Controllers;
use Session;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function create(){
        return view('product.create');

    }
    public function createsubmit(Request $req){
        $req->validate([
            'name'=>'required',
            'price'=>'required',
            'qty'=>'required',
            'dis'=>'required',
        ]);
        $p= new product();
        $p->name=$req->name;
        $p->price=$req->price;
        $p->qty=$req->qty;
        $p->dis=$req->dis;
        $p->save();
        
        return redirect()->route('home');

    }

    public function edit($id){
        
        $data= product::where('id','=',$id)
        ->first();
        
        return view('product.edit')
        ->with('data',$data);
    }

    public function editsubmit(Request $req){

        $req->validate([
            'name'=>'required',
            'price'=>'required',
            'qty'=>'required',
            'dis'=>'required',
        ]);

        $p = product::where('id','=',$req->id)
        ->first();

        $p->name=$req->name;
        $p->price=$req->price;
        $p->qty=$req->qty;
        $p->dis=$req->dis;     
        $p->save();
        
        return redirect()->route('home');        
        
}

    public function delete(Request $req){
        
        $deleteData = product::where('id','=',$req->id)

        ->first();

        $deleteData->delete();

        return redirect()->route('home');  
    }

    public function products(){
      
      $products= product::all();
      return view('product.products')
      ->with('products',$products);
        
    }
}
