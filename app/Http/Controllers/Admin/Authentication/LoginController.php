<?php

namespace App\Http\Controllers\Admin\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class LoginController extends Controller
{
    public function login(){
        return view('Admin.Authentication.index');
    }

    public function adminLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/admin/dashboard');
        }else{
            Session::flash('err','invalid pass');
            return redirect()->back();
        }
       
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
