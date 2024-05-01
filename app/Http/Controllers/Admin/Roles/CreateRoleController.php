<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateRoleController extends Controller
{
    public function createRole(){
        return view ("Admin.Roles.createRole");
    }
}
