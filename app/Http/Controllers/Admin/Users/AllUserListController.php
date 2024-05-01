<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllUserListController extends Controller
{
    public function allUserList(){
        // return "hi";
        return view ("Admin.Users.alluserlist");
    }
}
