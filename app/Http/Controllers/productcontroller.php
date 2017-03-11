<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function create($id){
        return view('dashboard.product',compact('id'));
    }
    public function store(Request $req){
        $product = new product();
        $product->name = $req->name;
        $product->description = $req->description;
        $product->quantity = $req->quantity;
        $product->size = $req->size;
        $product->price = $req->price;
        $product->status = $req->status;
        $product->category_id = $req->category_id;
        $image = $req->file('image');

        if($image){
            $product->image = $image->getClientOriginalName();
            $image->move(public_path('imgs'),$image->getClientOriginalName());
        }else{
            $product->image = 'noimage.jpg';
        }
        $product->save();

        return redirect('category');
    }

    public function view(){
        $products = product::all();
        return view('dashboard/show',compact('products'));
    }
}

