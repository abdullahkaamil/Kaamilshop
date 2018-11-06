<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
}

public function confirm($id){
        //find the order
$order = Order::find($id);
    //update the order
$order->update(['status' => 1]);
    //session message
    session()->flash('msg','Order HAS been Confirmed');
    //redirect the page back
return redirect('/orders');
}

    public function pending($id)
    {
        //find the order
        $order = Order::find($id);
        //update the order
        $order->update(['status' => 0]);
        //session message
        session()->flash('msg','Order HAS been pending');
        //redirect the page back
        return redirect('/orders');
    }

public function show ($id){
    $order = Order::find($id);
        return view('admin.orders.Details', compact('order'));
}


}
