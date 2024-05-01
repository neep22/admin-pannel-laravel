<?php

namespace App\Http\Controllers\Admin\Authentication;

use App\Http\Controllers\Controller;
use App\Models\Admin\Authentication\Admin;
use Illuminate\Http\Request;
use Hash;
// use Brian2694\Toastr\Facades\Toastr;

class SignupController extends Controller
{
    // get balde file
    public function signUp(){
        return view ('Admin.Authentication.signUp');
    }

    //inser user info 

    public function addUserInfo(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phonenumber'=>'required',
            'gender'=>'required',
        ]);

        $admin = new Admin();

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->phonenumber = $request->phonenumber;
        $admin->gender = $request->gender;
        $admin->save();

     

        // Toastr::success('Category Added Successfully', 
        // 'Title', [
        //         "positionClass" => "toast-top-right",
        //         "closeButton" => "true",
        //         "progressBar" => "true",
        // ]);

        // return redirect()->back();
        return response()->json([
            'status' => 'success'
        ]);
    }
}
