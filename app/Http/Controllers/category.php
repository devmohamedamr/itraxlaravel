<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category as categorymodel;
use App\Models\product;

class category extends Controller
{
    public function index(){
        $product =  product::all();
        foreach($product as $p){
            dd($p->category);
        }
        // $categories = categorymodel::all();
        // foreach($categories as $category){
        //     dd($category->product);
        // }
        // dd($categories);/
        // $categories =  DB::table("category")->get();
        return view('category.index',compact('categories'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $request->validate([
            "category"=>"required|min:2|max:4"
        ]);
        $category = new categorymodel;
        $category->name = $request->category;
        $category->save();
        //  DB::table("category")->insert(['name' => $request->category]);
        return redirect("category");
    }

    public function edit($id){
        $category = categorymodel::find($id);
        // $category = DB::table("category")->where('id',$id)->first();
        return view("category.edit",compact("category"));
    }

    public function update(Request $request){
        $category = categorymodel::find($request->id);
        $category->name = $request->category;
        $category->update();
        // DB::table('category')->where('id',$request->id)->update(["name"=>$request->category]);
        return redirect("category");
    }

    public function delete($id){
        $category = categorymodel::find($id);
        $category->delete();
        // DB::table("category")->delete($id);
        return redirect("category");
    }
}
