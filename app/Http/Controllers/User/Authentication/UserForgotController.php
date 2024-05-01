<?php

namespace App\Http\Controllers\User\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserForgotController extends Controller
{
    function userForgotPass(){
        return view ('user.Authentication.forgot');
    }
}
