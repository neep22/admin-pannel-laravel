<?php

namespace App\Http\Controllers\User\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserDashboardController extends Controller
{
    public function userDashboard(){
        $userInfo = Auth::guard('web')->user();
        $id= $userInfo->id;
        $name = $userInfo->name;
        $email = $userInfo->email;
        $image = $userInfo->userimage;
        return view ('user.Authentication.userDashboard', compact('name', 'email', 'id', 'image'));
    }
}
