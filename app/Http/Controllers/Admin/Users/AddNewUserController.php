<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Authentication\Admin;
use Illuminate\Http\Request;
use Hash;

class AddNewUserController extends Controller
{
    public function addNewUser(){
        return view ("Admin.Users.addnewuser");
    }

    public function addNewAdmin(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phonenumber'=>'required',
            'usertype'=>'required',
            'gender'=>'required',
        ]);

        $admin = new Admin();

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->phonenumber = $request->phonenumber;
        $admin->gender = $request->gender;
        $admin->usertype = $request->usertype;
        $admin->save();

        return response()->json([
            'status' => 'success'
        ]);
    }
}
