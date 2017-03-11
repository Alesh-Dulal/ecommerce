<?php

namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function category(){
        $categories = category::all();
        return view('dashboard/category',compact('categories'));
    }

    public function store(Request $req){
        $Category = new category();
        $name = $req->get('name');
        $status = $req->get('status');

        $Category->name=$name;
        $Category->status=$status;
        $Category->save();

        return redirect('category');
    }
}
