<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
return view('admin.products.index', compact('products'));
    }

    public function create()
    {
$products = new Product();
        return view('admin.products.create', compact('products'));
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

    //Details page
    public function show($id){
        $product = Product::find($id);
        return view('admin.products.details' ,compact('product') );
    }



    public function edit($id){
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));

    }

    public function update(Request $request, $id){
// find the prodcut
        $product = Product::find($id);

        // validate the form
$request->validate([
    'name' => 'required',
    'price'  => 'required',
    'description'  => 'required',
    ]);
        //check if there is any image
if($request->hasFile('image')){
    //check if there is old image
    if (file_exists(public_path('upload/'). $product->image)){
        unlink(public_path('upload/').$product->image);
    }
    // upload the new image
    $image = $request->image;
    $image->move('upload',$image->getClientOriginalName());
    $product->image = $request->image->getClientOriginalName();
}

        //updating the product
        $product->update([
           'name' => $request->name,
           'price' => $request->price,
           'description' => $request->description,
            'image' => $product->image,
        ]);

        //store a masssafe in session

        $request->session()->flash('msg','Product has been Updated');
        // redirect
        return redirect('/products');

    }
}
