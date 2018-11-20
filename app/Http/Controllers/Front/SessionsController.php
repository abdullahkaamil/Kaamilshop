<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('front.sessions.index');
    }

    public function store(Request $request){

//validate user

        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $request->validate($rules);


        //check if user exists
        $data = request(['email','password']);
        if ( ! auth()->attempt($data)){
            return back()->withErrors([
                'massage' => 'Wrong Password Or Email try again '
            ]);
        }
        return redirect('/user/profile');

    }

public function logout(){
        auth()->logout();


        session()->flash('msg','You have Been logged out successfully');
        return redirect('/user/login');
}

}
