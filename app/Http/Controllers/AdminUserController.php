<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    //
    public function index(){
        return view('admin.login');
    }
public function store(Request $request){

//validate the use
$request->validate([
   'email'=> 'required|email',
   'password'=>'required'
]);

    //log the user
$credentials =$request->only('email','password');

if (! Auth::guard('admin')->attempt($credentials)){
    return back()->withErrors([
        'message'=>'Wrong email and Password '
    ]);
}

  //  session message
session()->flash('msg', 'you have been logged in ');
 //   redirect
return redirect('admin/');

    }

}
