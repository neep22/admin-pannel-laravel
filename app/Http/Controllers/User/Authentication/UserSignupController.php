<?php

namespace App\Http\Controllers\User\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class UserSignupController extends Controller
{
    function userSignup(){
        return view ('user.Authentication.signup');
    }

    public function userRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->back();
    }

    public function userProfileUpdate(Request $request){




        // $request->validate([
        //     'userimage' => 'required',
        //     'phonenumber' => 'required'
        // ]);

        

        $imageName = '';
        if($userimage = $request->file('userimage')){
         $imageName = time().'-'.uniqid().'.'.$userimage->getClientOriginalExtension();
         $userimage->move('user/images/user', $imageName);
        }

        User::where('id', $request->up_id)->update([ 
            'userimage'=> $imageName,
            'phonenumber'=> $request->phonenumber,
            'birthday'=> $request->birthday,
            'address'=> $request->address,
        ]);

        return redirect()->back();

    }
}
