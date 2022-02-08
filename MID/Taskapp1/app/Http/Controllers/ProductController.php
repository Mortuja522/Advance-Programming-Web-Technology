<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function createview(){
        return view('Product.create');

    }
    public function create(Request $req){
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

    }

    public function edit(){
        
    }

    public function editSubmit(){
        
    }

    public function delete(){
        
    }

    public function getAll(){
        
    }
}
