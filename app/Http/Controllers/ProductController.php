<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
return view('admin.products.index', compact('products'));
    }

    public function create()
    {

        return view('admin.products.create');
    }

    public function store(Request $request)

    {
// validate the form
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'image|required'
        ]);

        //upload image
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move('upload', $image->getClientOriginalName());
        }


        //saving the data into the database
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image->getClientOriginalName()
        ]);
// session message
        $request->session()->flash('msg', 'your product has been added');

        //redirect
        return redirect('products/create');


    }
    //delete the product  function
    public function destroy($id){
        Product::destroy($id);
// massage for deleted
        session()->flash('msg','Product has been Deleted');
    return redirect('/products');
    }
}
