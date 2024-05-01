<?php

namespace App\Http\Controllers\User\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class UserLoginController extends Controller
{
    function login(){
        return view ('user.Authentication.login');
    }
   

    public function userLogin(Request $request){
        $request->validate([
                'email'=>'required',
                'password'=>'required',
                ]);

        if(Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password])){
            
                    $userInfo = AUth::guard('web')->user();
                    

                    // return redirect()->route('user.user-dashboard', ['id'=> $userInfo->id, 'name' => $userInfo->name]); 
                    // return redirect(url('/user/user-dashboard', ['id'=> $userInfo->id, 'name' => $userInfo->name])); 

                    //normal dashboard return
                    return redirect('/'); 
            }
        else{
            Session::flash('err','invalid pass');
                return redirect()->back();
        }

    }

    public function logout(){
        Auth::guard('web')->logout(); 
        return redirect('/login');
    }
}
