<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllRolesListController extends Controller
{
    public function allRolesList(){
        // return "hi";
        return view ("Admin.Roles.allroleslist");
    }
}
