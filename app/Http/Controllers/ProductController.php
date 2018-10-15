<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index(){

}

public function create(){

return view('admin.products.create');
}
public function store (Request $request)

{
// validate the form
    $request->validate([
        'name'=>'required',
        'price'=>'required',
        'description'=>'required',
        'image'=>'image|required'
    ]);

    //upload image
    if ($request->hasFile('image')){
        $image = $request->image;
        $image->move('upload',$image->getClientOriginalName());
    }
}




}
